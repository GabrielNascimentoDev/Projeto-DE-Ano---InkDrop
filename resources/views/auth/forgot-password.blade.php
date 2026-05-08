<x-guest-layout>

    @if (session('status'))
        <div class="auth-status">
            {{ session('status') }}
        </div>
    @endif

    <h2 class="auth-title">ESQUECI MINHA SENHA</h2>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

           <label for="email" class="auth-label">Email:</label>
            <input 
            id="email" 
            class="auth-input" 
            type="email" 
            name="email" 
            value="{{ old('email') }}" 
            required 
            autofocus />
            @error('email')
            <span class="auth-error">{{ $message }}</span>
            @enderror

       <button type="submit" class="auth-btn">
            Redefinir senha
       </button>
    </form>
</x-guest-layout>
