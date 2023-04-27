<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/graficos/graf.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.1/chart.umd.js"></script>
    <script src="/js/graficos/graficos.js" defer></script>
    <script src="/js/botao-voltar/botao-voltar.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos</title>
</head>
<body>
    <main class="painel-inicial-grafico imagem-de-fundo">
    <button class="btn-voltar-sessao"><img src="img/up.svg" alt=""></button>
        <!-- <button class="botao-voltar">
            <span class="span-voltar"><</span>
        </button> -->
    <div class="chartCard">
        <div class="chartBox">
            <canvas id="grafico" width="600" height="250"></canvas>
        </div>
    </div>
    </main>
</body>
</html>