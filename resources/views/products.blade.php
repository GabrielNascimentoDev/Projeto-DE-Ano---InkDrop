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
            @forelse($products as $product)
                <div class="card">
                    <span class="card-brand">{{$product->brand}}</span>
                    <a href="{{route('product.show', $product)}}" class="card_link">
                        <img src="{{ asset($product -> image) }}" 
                            alt="{{$product -> name}}">
                    
                        <div class="card_overlay">
                            <span class="card_overlay_text">VER PRODUTO</span>
                        </div>
                    </a>
                    <div class="card-info">
                        <p class="card-name">{{$product -> name}}</p>
                        <p class="card-price">R$ {{ number_format($product->price, 2, ',', '.') }}</p>
                    </div>
                </div>
            @empty
                <p class="empty-text">Nenhum produto encontrado</p>
            @endforelse

            <div class="pagination">
                {{$products -> links()}}
            </div>
        </div>

    </main>

    @include('partials.footer')
    
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>