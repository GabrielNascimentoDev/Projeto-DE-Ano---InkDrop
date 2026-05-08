<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} — InkDrop</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/product.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    @include('partials.header')

    <main class="product-main">
        <div class="product-container">

            {{-- IMAGEM DO PRODUTO --}}
            <div class="product-image-wrapper">
                <img 
                    src="{{ asset($product->image) }}" 
                    alt="{{ $product->name }}"
                    class="product-image"
                >
            </div>

            {{-- INFORMAÇÕES DO PRODUTO --}}
            <div class="product-info">

                {{-- Tag da marca --}}
                <span class="product-brand">{{ $product->brand }}</span>

                {{-- Nome --}}
                <h1 class="product-name">{{ $product->name }}</h1>

                {{-- Preço --}}
                <p class="product-price">
                    R$ {{ number_format($product->price, 2, ',', '.') }}
                </p>

                {{-- 
                    number_format() formata o número para o padrão brasileiro:
                    1290.00 → 1.290,00
                    Parâmetros: (número, casas decimais, separador decimal, separador milhar)
                --}}

                <hr class="product-divider">

                {{-- Descrição --}}
                @if($product->description)
                    <p class="product-description">{{ $product->description }}</p>
                    <hr class="product-divider">
                @endif

                {{-- Formulário para adicionar ao carrinho --}}
                <form class="product-form" method="POST" action="#">
                    @csrf

                    <div class="product-quantity">
                        <label for="quantity" class="product-quantity-label">
                            Quantidade:
                        </label>
                        <input 
                            type="number" 
                            id="quantity"
                            name="quantity" 
                            value="1" 
                            min="1" 
                            max="{{ $product->stock }}"
                            class="product-quantity-input"
                        >
                    </div>

                    {{-- Estoque disponível --}}
                    @if($product->stock > 0)
                        <button type="submit" class="product-btn">
                            ADICIONAR AO CARRINHO
                        </button>
                    @else
                        <button type="button" class="product-btn product-btn--disabled" disabled>
                            SEM ESTOQUE
                        </button>
                    @endif

                </form>

            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>A