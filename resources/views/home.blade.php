<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="InkDrop — streetwear selecionado.">
    <title>InkDrop</title>

    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

    @include('partials.header')

    <main>
        <div class="slider" id="slider">
            <div class="track" id="track">
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
            </div>
            <button class="arrow arrow-prev" onclick="move(-1)">&#8249;</button>
            <button class="arrow arrow-next" onclick="move(1)">&#8250;</button>
            <div class="dots" id="dots">
                <div class="dot active" onclick="goTo(0)"></div>
                <div class="dot" onclick="goTo(1)"></div>
                <div class="dot" onclick="goTo(2)"></div>
            </div>
        </div>

        <h2 class="main_title">NOVIDADES</h2>
        <div class="total_cards">

            <div class="card card--destaque">
                <span class="card-brand">STUSSY</span>
                <a href="{{route('product.show', 1)}}" class="card_link">
                    <img src="{{ asset('assets/camiseta-stussy.png') }}" alt="Camiseta Stussy SS Link Black">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Camiseta Stussy SS Link Black</p>
                    <p class="card-price">R$ 649,99</p>
                </div>
            </div>

            <div class="card">
                <span class="card-brand">VIRGIL ABLOH</span>
                <a href="{{route('product.show', 2)}}" class="card_link">
                    <img src="{{ asset('assets/camiseta-figures.png') }}" alt="Camiseta Figures of Speech White">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Virgil Abloh x MCA x Champion Camiseta Figures of Speech White</p>
                    <p class="card-price">R$ 1.290,00</p>
                </div>
            </div>

            <div class="card">
                <span class="card-brand">SUPREME</span>
                <a href="{{route('product.show', 3)}}" class="card_link">
                    <img src="{{ asset('assets/jaqueta-sup.png') }}" alt="Umbro x Supreme Jaqueta">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Umbro x Supreme Jaqueta Cotton Ripstop Track Black SS26-W1</p>
                    <p class="card-price">R$ 2.499,00</p>
                </div>
            </div>

        </div>

        <button class="button_more">
            <a href="{{ route('products') }}">VER MAIS</a>
        </button>
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>