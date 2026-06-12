<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pedidos — InkDrop</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { background: #0a0a0a; color: #fff; font-family: 'Work Sans', sans-serif; }
        .wrapper { max-width: 900px; margin: 3rem auto; padding: 2rem; }
        h1 { font-size: 2rem; font-weight: 800; margin-bottom: 2rem; }
        h1 span { color: #d42020; }
        .order-card { background: #111; border: 1px solid #1a1a1a; padding: 1.5rem; margin-bottom: 1rem; }
        .order-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #1a1a1a; }
        .order-id { font-size: 13px; font-weight: 700; }
        .order-date { font-size: 12px; color: #666; }
        .order-status { font-size: 11px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 4px 10px; background: rgba(212,32,32,0.15); color: #d42020; border: 1px solid rgba(212,32,32,0.3); }
        .order-items { margin-bottom: 1rem; }
        .order-item { display: flex; justify-content: space-between; font-size: 13px; padding: 6px 0; border-bottom: 1px solid #1a1a1a; color: #aaa; }
        .order-item:last-child { border-bottom: none; }
        .order-total { display: flex; justify-content: space-between; font-size: 15px; font-weight: 700; padding-top: 1rem; }
        .empty { text-align: center; color: #666; padding: 4rem; }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="wrapper">
        <h1>Meus <span>Pedidos</span></h1>

        @forelse($orders as $order)
            <div class="order-card">
                <div class="order-header">
                    <div>
                        <div class="order-id">Pedido #{{ $order->id }}</div>
                        <div class="order-date">{{ $order->created_at->format('d/m/Y H:i') }}</div>
                    </div>
                    <div class="order-status">{{ $order->status }}</div>
                </div>

                <div class="order-items">
                    @foreach($order->items as $item)
                        <div class="order-item">
                            <span>{{ $item->name }} x{{ $item->quantity }}</span>
                            <span>R$ {{ number_format($item->price * $item->quantity, 2, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="order-total">
                    <span>Total</span>
                    <span>R$ {{ number_format($order->total, 2, ',', '.') }}</span>
                </div>
            </div>
        @empty
            <div class="empty">Você ainda não fez nenhum pedido.</div>
        @endforelse
    </div>

    @include('partials.footer')
</body>
</html>