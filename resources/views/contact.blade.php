<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset ('styles/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/contact.css') }}">
</head>
<body>
    @include('partials.header')
    <main>
        <div class="general_contact">
            <div class="information">
                <h2>Informações</h2>
                <p>Tem alguma dúvida, sugestão ou proposta comercial? Use os canais abaixo ou preencha o formulário ao lado.</p>
                <img src="*" alt="">
                <p>email.inkdrop@gmail.com</p>
                <img src="*" alt="">
                <p>+55 (11) 99999-9999</p>
            </div>
            <div class="enviar_mensagem">
                <h2>Envie uma Mensagem</h2>
                <form action="*" class="forms">
                    <label for="name">Seu Nome</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu nome...">
                    <label for="email">Seu E-mail</label>
                    <input type="text" name="email" id="email" placeholder="Digite seu e-mail...">
                    <label for="mensagem">Mensagem</label>
                    <input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem...">
                   <button type="submit">ENVIAR</button>
                </form>
                <p>*A lógica de envio de email para este formulário não está implementada.</p>
            </div>
        </div> 
    </main>
    
       @include('partials.footer')
</body>
</html>