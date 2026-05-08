<footer>
    <div class="footer_content">
        <div class="footer_brand">
            <img src="{{ asset('assets/logo.png') }}" alt="InkDrop" class="footer_logo">
            <p class="footer_slogan">Streetwear selecionado.</p>
        </div>

        <div class="footer_links">
            <h3 class="footer_heading">Navegação</h3>
            <a href="{{ route('products') }}" class="footer_link">Produtos</a>
            <a href="{{ route('collections') }}" class="footer_link">Coleções</a>
            <a href="{{ route('contact') }}" class="footer_link">Contato</a>
        </div>

        <div class="footer_links">
            <h3 class="footer_heading">Conta</h3>
            <a href="{{ route('login') }}" class="footer_link">Entrar</a>
            <a href="{{ route('register') }}" class="footer_link">Cadastrar</a>
            <a href="#" class="footer_link">Meus pedidos</a>
        </div>

        <div class="footer_links">
            <h3 class="footer_heading">Redes sociais</h3>
            <a href="#" class="footer_link">Instagram</a>
            <a href="#" class="footer_link">TikTok</a>
            <a href="#" class="footer_link">Twitter/X</a>
        </div>
    </div>

    <div class="footer_bottom">
        <p>&copy; 2025 InkDrop. Todos os direitos reservados.</p>
    </div>
</footer>