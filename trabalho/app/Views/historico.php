<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/iniciarSessao/iniciarSessao.css">
    <link rel="stylesheet" href="/css/historico/historico.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/botao-voltar/botao-voltar.js" defer></script>
    <title>Document</title>
</head>
<body>
    <main class="imagem-de-fundo">
        <h1>Histórico de veiculos</h1>
        <button class="btn-voltar-sessao"><img src="img/up.svg" alt=""></button>
        <div class="div-linha">
            <fieldset class="first-fiel">
                <legend class="legenda-1"></legend>
                <?php foreach ($estacionamento as $estacionamentos) :?>
                <div class="div-1">
                    <p class="p-placa"><?= $estacionamentos["placa_veiculo"] . " - (" . $estacionamentos["veiculo"] . ") - e: " . ($estacionamentos["he"]) . " s: " . ($estacionamentos["hs"])?></p>
                </div>
                <?php endforeach; ?>
            </fieldset>
        </div>
    </main>
</body>
</html>
<!-- Placa: <?php 
// $estacionamentos["placa_veiculo"] . " - (" . $estacionamentos["veiculo"] . ") - e:"
?> 09:40 | s:10:32</p> -->