<x-guest-layout>

    <h2 class="auth-title">VERIFICAR EMAIL</h2>

    <p class="auth-description">
        Enviamos um link de confirmação para o seu email. 
        Acesse sua caixa de entrada e clique no link para ativar sua conta.
    </p>

    @if (session('status') == 'verification-link-sent')
        <span class="auth-message">
            Um novo link de confirmação foi enviado para o seu email!
        </span>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="auth-btn">
            REENVIAR EMAIL
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="auth-btn-secondary">
            SAIR DA CONTA
        </button>
    </form>

</x-guest-layout>
