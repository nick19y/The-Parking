<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/iniciarSessao/iniciarSessao.css">
    <link rel="stylesheet" href="css/recuperarSenha/recuperarSenha.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <main class="iniciar-sessao">
        <div class="imagem-carro-inicial">
            <img src="img/logo.svg" alt="" class="imagem-carro">
        </div>
        <form class="formulario-iniciar-sessao" action="codigoDeSeguranca.php">
            <h1 class="titulo-iniciar-sessao">Recuperar senha</h1>
            <input type="email" class="entrada-nome-email recuperar-senha-input" placeholder= "Digite o seu email">
            <button class="btn-entrar-usuario">Enviar código de segurança</button>
        </form>
    </main>
</body>
</html>