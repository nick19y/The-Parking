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
        <?= form_open(base_url("admin/logar")) ?>
        <div class="formulario-iniciar-sessao">
            <h1 class="titulo-iniciar-sessao">Iniciar sessão</h1>
            <input type="email" class="entrada-nome-email" placeholder= "Digite o seu email" name="email">
            <input type="password" class="entrada-nome-email" placeholder= "Digite sua senha" name="senha">
            <button class="btn2-padrao" type="submit">Iniciar sessão</button>
            <a href="recuperarSenha" class="esqueceu-senha">Esqueceu a senha?</a>
            <a href="criarConta" class="esqueceu-senha">Criar nova conta</a>
        </div>
        <?= form_close()?>
    </main>
</body>
</html>