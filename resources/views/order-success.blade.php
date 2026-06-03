<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Confirmado — InkDrop</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/checkout.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
     @include('partials.header')

    <div class="success-wrapper">
        <div class="success-icon">✅</div>
        <h1>Pedido <span>Confirmado!</span></h1>
        <p class="success-sub">Obrigado pela sua compra! Você receberá um email com os detalhes.</p>

        <div class="order-card">
            <h2>Detalhes do Pedido #{{ $order->id }}</h2>
            <div class="order-row">
                <span>Status</span>
                <strong>{{ ucfirst($order->status) }}</strong>
            </div>
            <div class="order-row">
                <span>Pagamento</span>
                <strong>{{ strtoupper($order->payment_method) }}</strong>
            </div>
            <div class="order-row">
                <span>Endereço</span>
                <strong>{{ $order->address }}, {{ $order->number }} — {{ $order->city }}/{{ $order->state }}</strong>
            </div>
            @foreach($order->items as $item)
                <div class="order-row">
                    <span>{{ $item->name }} x{{ $item->quantity }}</span>
                    <strong>R$ {{ number_format($item->price * $item->quantity, 2, ',', '.') }}</strong>
                </div>
            @endforeach
            <div class="order-total">
                <span>Total</span>
                <strong>R$ {{ number_format($order->total, 2, ',', '.') }}</strong>
            </div>
        </div>

        <a href="{{ route('home') }}" class="btn-home">Continuar Comprando →</a>
    </div>

    @include('partials.footer')
</body>
</html>