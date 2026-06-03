<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho InkDrop</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/cart.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <h1 class="main_title">MEU CARRINHO</h1>

        @if(session('success'))
            <p style="color:green; text-align:center; padding:1rem">{{ session('success') }}</p>
        @endif

        <div class="cart">
            <div class="cart-items">
                @forelse($cart as $item)
                    <section class="product">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                        <div class="product_info">
                            <p class="product_name">{{ $item['name'] }}</p>
                            <p class="product_price">R$ {{ number_format($item['price'], 2, ',', '.') }}</p>
                            <form method="POST" action="{{ route('cart.remove', $item['id']) }}">
                                @csrf
                                @method('DELETE')
                                <button class="remove_button">Remover</button>
                            </form>
                        </div>
                        <div class="product_resume">
                            <form method="POST" action="{{ route('cart.update') }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="product_amount" onchange="this.form.submit()">
                            </form>
                            <p class="product_price">R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</p>
                        </div>
                    </section>
                @empty
                    <p style="color:#fff; text-align:center; padding:2rem">Seu carrinho está vazio.</p>
                @endforelse
            </div>

            <section class="resume">
                <p class="resume_title">RESUMO DA COMPRA</p>
                <hr id="top">
                <div class="total">
                    <p>Total</p>
                    <p>R$ {{ number_format($total ?? 0, 2, ',', '.') }}</p>
                </div>
                <hr id="bottom">
                <a href="{{ route('checkout') }}" class="btn_buy">FINALIZAR COMPRA</a>
                <a href="{{ route('products') }}">Continuar comprando</a>
            </section>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>