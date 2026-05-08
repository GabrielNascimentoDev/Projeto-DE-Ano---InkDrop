<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="InkDrop — streetwear selecionado. As melhores peças de marcas como Stussy, Supreme e mais.">
    <title>InkDrop</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

   @include('partials.header')

    <main>
        <h1 class="main_title">PRODUTOS</h1>
        <div class="total_cards">

            <div class="card">
            
                <span class="card-brand">STUSSY</span>
                <a href="#" class="card_link">
                    <img src="{{ asset('assets/camiseta-stussy.png') }}" 
                        alt="Camiseta Stussy SS Link Black">
                
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
                <a href="#" class="card_link">
                    <img src="{{ asset('assets/camiseta-figures.png') }}" 
                        alt="Camiseta Figures of Speech White">
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
                <a href="#" class="card_link">
                    <img src="{{ asset('assets/jaqueta-sup.png') }}" 
                        alt="Umbro x Supreme Jaqueta">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Umbro x Supreme Jaqueta Cotton Ripstop Track Black SS26-W1</p>
                    <p class="card-price">R$ 2.499,00</p>
                </div>
            </div>

            <div class="card">
                <span class="card-brand">STUSSY</span>
                <a href="#" class="card_link">
                    <img src="{{ asset('assets/camiseta-stussy2.png')}}" 
                        alt="Camiseta Stussy Rollers Blue">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Camiseta Stussy Rollers Blue</p>
                    <p class="card-price">R$ 799,99</p>
                </div>
            </div>

            <div class="card">
                <span class="card-brand">HELLSTAR</span>
                <a href="#" class="card_link">
                    <img src="{{asset('assets/camiseta hellstar.webp')}}" 
                        alt="Camiseta Stussy Rollers Blue">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Camiseta Hellstar Globe Smile Face White</p>
                    <p class="card-price">R$ 2.500,00</p>
                </div>
            </div>
            <div class="card">
                <span class="card-brand">1of1</span>
                <a href="#" class="card_link">
                    <img src="{{asset('assets/CALCA 1of1.jpg')}}" 
                        alt="Calca 1of1">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Calça Exclusiviist New Vintage Sacred Sweat Grey</p>
                    <p class="card-price">R$ 399,90</p>
                </div>
            </div>
             <div class="card">
                <span class="card-brand">KAWS</span>
                <a href="#" class="card_link">
                    <img src="{{asset('assets/boneco kaws.webp')}}" 
                        alt="Boneco Kaws">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">KAWS Holiday Thailand Vinyl Brown</p>
                    <p class="card-price">R$ 10.500,00</p>
                </div>
            </div>
             <div class="card">
                <span class="card-brand">STUSSY</span>
                <a href="#" class="card_link">
                    <img src="{{asset('assets/bone stussy.webp')}}" 
                        alt="Camiseta Stussy Rollers Blue">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Boné Stussy Parts & Service Mesh Blue</p>
                    <p class="card-price">R$ 650,00</p>
                </div>
            </div>
             <div class="card">
                <span class="card-brand">SUPREME</span>
                <a href="#" class="card_link">
                    <img src="{{asset('assets/cueca sup.webp')}}" 
                        alt="Cueca Supreme">
                    <div class="card_overlay">
                        <span class="card_overlay_text">VER PRODUTO</span>
                    </div>
                </a>
                <div class="card-info">
                    <p class="card-name">Hanes x Supreme Cueca Spider Web Boxer Briefs 2 Pack Black SS26-W9</p>
                    <p class="card-price">R$ 800,00</p>
                </div>
            </div>
        </div>
       @include('partials.footer')
    </main>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>