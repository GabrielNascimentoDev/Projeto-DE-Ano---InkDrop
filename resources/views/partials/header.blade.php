<header>
    <div class="fundations">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo da InkDrop" class="logo">
        </a>

        <div class="search">
            <div class="search_button">
                <input type="text" placeholder="O que você está procurando?" class="search_input" >
               
            </div>
        </div>

        <nav class="header_links">
    <a href="{{ route('cart') }}">
        <img src="{{ asset('assets/cart.png') }}" alt="Carrinho" class="links_img">
    </a>

    @auth
        
        <div class="user_menu">
            <button class="user_menu_btn" onclick="toggleMenu()">
                <img src="{{ asset('assets/account.png') }}" alt="Minha conta" class="links_img">
            </button>

            <div class="user_dropdown" id="userDropdown">
                <span class="user_name">Olá, {{ Auth::user()->name }}</span>
                <hr class="dropdown_divider">
                @if(Auth::user()->is_admin)
    <a href="{{ route('admin') }}" class="dropdown_item">Painel Admin</a>
@else
    <a href="{{ route('profile.edit') }}" class="dropdown_item">Minha Conta</a>
    <a href="#" class="dropdown_item">Meus Pedidos</a>
@endif
                <hr class="dropdown_divider">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown_item dropdown_logout">Sair</button>
                </form>
            </div>
        </div>
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

<script src="{{asset('script.js')}}"></script>