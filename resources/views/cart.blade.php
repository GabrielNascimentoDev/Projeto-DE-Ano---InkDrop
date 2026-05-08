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
    <link rel="stylesheet" href="{{ asset('styles/cart.css') }}">
</head>
<body>
     @include('partials.header')
    <main>
        <h1 class="main_title">MEU CARRINHO</h1>
        <div class="cart">
             <section class="product">
            <img src="{{asset('assets/boneco kaws.webp')}}" alt="Foto do produto">
            <div class="product_info">
                <p class="product_name">Calça CLASS PRETA</p>
                <p class="product_price">R$ 189,99</p>
                <button class="remove_button">Remover</button>
            </div>
            <div class="product_resume">
                <input type="number" class="product_amount">
                <p class="product_price">R$ 189,99</p>
            </div>
        </section>
        <section class="resume">
            <p class="resume_title">RESUMO DA COMPRA</p>
            <hr id="top">
            <div class="total">
                <p>Total</p>
                <p>R$ 189,99</p>
            </div>
            <hr id="bottom">
            <button class="btn_buy">FINALIZAR COMPRA</button>
            <a href="{{ route('products')  }}">Continuar a comprar</a>
        </section>
        </div>
    </main>
    @incude('partials.footer')
</body>
</html>