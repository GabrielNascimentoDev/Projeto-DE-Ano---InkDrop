<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Seu carrinho está vazio!');
        }
        $total = array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cart));
        return view('checkout', compact('cart', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string',
            'email'          => 'required|email',
            'phone'          => 'required|string',
            'cep'            => 'required|string',
            'address'        => 'required|string',
            'number'         => 'required|string',
            'neighborhood'   => 'required|string',
            'city'           => 'required|string',
            'state'          => 'required|string',
            'payment_method' => 'required|in:pix,cartao',
        ]);

        $cart  = session()->get('cart', []);
        $total = array_sum(array_map(fn($i) => $i['price'] * $i['quantity'], $cart));

        $order = Order::create([
            'user_id'        => auth()->id(),
            'status'         => 'pendente',
            'total'          => $total,
            'name'           => $request->name,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'cep'            => $request->cep,
            'address'        => $request->address,
            'number'         => $request->number,
            'neighborhood'   => $request->neighborhood,
            'city'           => $request->city,
            'state'          => $request->state,
            'payment_method' => $request->payment_method,
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $item['id'],
                'name'       => $item['name'],
                'price'      => $item['price'],
                'quantity'   => $item['quantity'],
            ]);
        }

        MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));

        $items = [];
        foreach ($cart as $item) {
            $items[] = [
                'id'         => (string) $item['id'],
                'title'      => $item['name'],
                'quantity'   => (int) $item['quantity'],
                'unit_price' => (float) $item['price'],
            ];
        }

        try {
            $client     = new PreferenceClient();
            $preference = $client->create([
                'items'      => $items,
                'back_urls'  => [
                    'success' => route('order.success', $order->id),
                    'failure' => route('checkout'),
                    'pending' => route('order.success', $order->id),
                ],
                'external_reference' => (string) $order->id,
            ]);

            session()->forget('cart');
            return redirect($preference->init_point);

        } catch (\MercadoPago\Exceptions\MPApiException $e) {
    dd($e->getApiResponse()->getContent());
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
    }
}