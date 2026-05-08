<x-guest-layout>

    <h2 class="auth-title">CONFIRMAR SENHA</h2>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

       
           <label for="password" class="auth-label">Senha:</label>

            <input 
            id="password" 
            class="auth-input"
            type="password"
            name="password"
            required
            autocomplete="current-password" />

        @error('password')
        <span class="auth-error">{{ $message }}</span>
        @enderror

       <button type="submit" class="auth-btn">Confirmar senha</button>

    </form>
</x-guest-layout>
