<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/iniciarSessao/iniciarSessao.css">
    <link rel="stylesheet" href="/css/criarConta/criarConta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="/js/botao-voltar/botao-voltar.js" defer></script>
</head>
<body>
    <main class="imagem-de-fundo">
    <button class="btn-voltar-sessao"><img src="/img/up.svg" alt=""></button>
        <div class="imagem-carro-inicial">
            <img src="/img/logo.svg" alt="" class="imagem-carro">
        </div>
        <!-- <form class="formulario-iniciar-sessao criar-conta-iniciar-sessao" action="mensagemContaCriada"> -->
        <?= form_open(base_url("admin/novo")) ?>
        <div class="formulario-iniciar-sessao criar-conta-iniciar-sessao">
            <h1 class="titulo-iniciar-sessao">Criar conta</h1>
            <input type="text" class="entrada-nome-email input-nome-email" placeholder= "Digite o seu nome" name="nome">
            <input type="email" class="entrada-nome-email input-nome-email" placeholder= "Digite o seu email" name="email">
            <input type="password" class="entrada-nome-email input-nome-email" placeholder= "Digite sua senha" name="senha">
            <input type="password" class="entrada-nome-email input-nome-email" placeholder= "Confirme sua senha">
            <button class="btn2-padrao criar-conta-btn" type="submit">Criar conta</button>
        </div>
        <?= form_close() ?>    
    </main>
</body>
</html>