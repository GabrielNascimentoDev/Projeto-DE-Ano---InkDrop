<x-guest-layout>

    
    @if (session('status'))
        <div class="auth-status">
            {{ session('status') }}
        </div>
    @endif

    <h2 class="auth-title">LOGIN</h2>

    {{--
        action="{{ route('login') }}" → envia o formulário para a
        rota de login do Breeze, que já cuida de tudo:
        validar email, verificar senha, criar sessão, redirecionar.
        Você não recisa escrever nada disso — o Breeze já fez.

        @csrf → gera um token de segurança invisível no formulário.
        Sem ele o Laravel rejeita o envio com erro 419.
        É uma proteção contra ataques CSRF (Cross-Site Request Forgery)
        — alguém tentando enviar um formulário falso em nome do usuário.
    --}}
    <form method="POST" action="{{ route('login') }}">
        @csrf


        <label for="email" class="auth-label">Email:</label>
        <input 
            id="email" 
            type="email" 
            name="email" 
            class="auth-input"
            value="{{ old('email') }}"
            required 
            autofocus
            autocomplete="username"
        >
        {{--
            old('email') → se o formulário for enviado com erro,
            o Laravel guarda o valor digitado e repõe aqui.
            Assim o usuário não precisa redigitar tudo.
        --}}

        {{-- Mensagem de erro do email --}}
        @error('email')
            {{--
                @error('campo') → diretiva Blade que só renderiza
                o conteúdo se houver erro de validação naquele campo.
                $message é a mensagem de erro gerada pelo Laravel.
            --}}
            <span class="auth-error">{{ $message }}</span>
        @enderror

        {{-- CAMPO SENHA --}}
        <label for="password" class="auth-label">Senha:</label>
        <input 
            id="password" 
            type="password" 
            name="password" 
            class="auth-input"
            required
            autocomplete="current-password"
        >

        @error('password')
            <span class="auth-error">{{ $message }}</span>
        @enderror

        {{-- LINK ESQUECI MINHA SENHA --}}
        @if (Route::has('password.request'))
            {{--
                Route::has() verifica se a rota existe antes de
                mostrar o link — boa prática para não quebrar se
                a rota for removida.
            --}}
            <a href="{{ route('password.request') }}" class="auth-forgot">
                ESQUECI MINHA SENHA
            </a>
        @endif

        {{-- BOTÃO ENTRAR --}}
        <button type="submit" class="auth-btn">
            ENTRAR
        </button>

        {{-- LINK PARA CADASTRO --}}
        <span class="auth-switch">
            Não tem uma conta? 
            <a href="{{ route('register') }}">Cadastre-se</a>
        </span>

    </form>

</x-guest-layout>