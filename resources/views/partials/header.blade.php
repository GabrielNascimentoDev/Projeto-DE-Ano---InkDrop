<header>
    <div class="fundations">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo da InkDrop" class="logo">
        </a>

        <div class="search">
            <div class="search_button">
                <input type="text" placeholder="O que você está procurando?" class="search_input">
                <button type="submit" class="search_submit">
                    <img src="{{ asset('assets/search.png') }}" alt="Buscar" class="search_img">
                </button>
            </div>
        </div>

        <nav class="header_links">
    <a href="{{ route('cart') }}">
        <img src="{{ asset('assets/cart.png') }}" alt="Carrinho" class="links_img">
    </a>

    {{-- 
        @auth → só renderiza se o usuário estiver logado
        @guest → só renderiza se o usuário NÃO estiver logado
    --}}
    @auth
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/account.png') }}" alt="Minha conta" class="links_img">
        </a>
    @else
        <a href="{{ route('login') }}">
            <img src="{{ asset('assets/account.png') }}" alt="Entrar" class="links_img">
        </a>
    @endauth
</nav>
    </div>

    <nav class="header_navigation">
        <a href="{{ route('products') }}" class="header_navigation_item">PRODUTOS</a>
        <a href="{{ route('collections') }}" class="header_navigation_item">COLEÇÕES</a>
        <a href="{{ route('contact') }}" class="header_navigation_item">CONTATO</a>
    </nav>
</header>