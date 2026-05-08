<x-guest-layout>

    <h2 class="auth-title">CADASTRO</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

            <label class="auth-label">Nome:</label>
            <input 
            id="name" 
            class="auth-input" 
            type="text" 
            name="name"
            value="{{ old('name') }}" 
            required 
            autofocus 
            autocomplete="name" />
            @error('name')
           <span class="auth-error">{{ $message }}</span>
           @enderror
        
            <label for="email" class="auth-label">Email:</label>
            <input 
            id="email" 
            class="auth-input" 
            type="email" 
            name="email" 
            value="{{ old('email') }}" 
            required 
            autocomplete="username" />
           @error('email')
           <span class="auth-error">{{ $message }}</span>
           @enderror

            <label for="password" class="auth-label">Senha:</label>

            <input 
            id="password" 
            class="auth-input"
            type="password"
            name="password"
            required 
            autocomplete="new-password" />
           @error('password')
           <span class="auth-error">{{ $message }}</span>
           @enderror

            <label for="confirm-password" class="auth-label">Confirmar senha:</label>

            <input 
            id="password_confirmation" 
            class="auth-input"
            type="password"
            name="password_confirmation" 
            required 
            autocomplete="new-password" />

            @error('password_confirmation')
            <span class="auth-error">{{ $message }}</span>
            @enderror

        <span class="auth-switch">
        Ja tem uma conta?
        <a href="{{ route('login') }}">Login</a>
        </span>

        <button type="submit" class="auth-btn">Registrar</button>
    </form>
</x-guest-layout>
