<x-guest-layout>

    <h2 class="auth-title">MUDAR SENHA</h2>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

           <label for="email" class="auth-label">Email:</label>
            <input 
            id="email" 
            class="auth-input" 
            type="email" 
            name="email" 
            value="{{ old('email', $request->email) }}" 
            required 
            autofocus 
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

       <button type="submit" class="auth-btn">Mudar senha</button>
    </form>
</x-guest-layout>
