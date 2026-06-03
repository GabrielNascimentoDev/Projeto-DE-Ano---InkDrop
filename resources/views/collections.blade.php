<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/collection.css')}}">
</head>
<body>
      @include('partials.header')
    <main>
        <h1 class="title">COLEÇÕES</h1>
        <div class="total_collections">
            <div class="collection">
                <a href="{{ route('products', ['collection' => 'summer']) }}">
                    <img src="{{ asset('assets/collections/summer.png')  }}" alt="Coleção Summer">
                    <span id="summer">SUMMER</span>
                </a>
            </div>
            <div class="collection">
                <a href="{{ route('products', ['collection' => 'winter']) }}">
                    <img src="{{ asset('assets/collections/winter.png')  }}" alt="Coleção Summer">
                    <span id="winter">WINTER</span>
                </a>
            </div>
            <div class="collection">
                <a href="{{ route('products', ['collection' => 'conjuntos']) }}">
                    <img src="{{  asset('assets/collections/conjuntos.png')  }}" alt="Coleção Summer">
                    <span>CONJUNTOS</span>
                </a>
            </div>
        </div>
    </main>
    @include('partials.footer')
<script src="{{asset ('js/script.js')}}"></script>
</body>
</html>