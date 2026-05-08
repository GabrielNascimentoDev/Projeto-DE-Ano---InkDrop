<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InkDrop — {{ $title ?? 'Acesse sua conta' }}</title>

    {{-- Nosso CSS da InkDrop em vez do Tailwind do Breeze --}}
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/auth.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="auth-body">

    {{-- Logo centralizada no topo --}}
    <div class="auth-logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="InkDrop">
        </a>
    </div>

    {{-- O $slot é onde o Breeze injeta o conteúdo de cada tela --}}
    {{-- login, cadastro, esqueci senha etc. aparecem aqui --}}
    <div class="auth-container">
        {{ $slot }}
    </div>

    @include('partials.footer')

</body>
</html>