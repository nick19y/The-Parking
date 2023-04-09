<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/index/index.css">
    <link rel="stylesheet" href="/css/iniciarSessao/iniciarSessao.css">
    <link rel="stylesheet" href="/css/registro/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="/js/registro/registro.js" defer></script>
</head>
<body class="corpo-registro">
    <header class="cabecalho-registro">
        <div class="cabecalho-nome-data">
            <div class="imagem-usuario">
                <img src="/img/usuario.svg" alt="Imagem do usuário" class="imagem">
                <h1 class="nome-usuario">Enzo Guimarães</h1>
            </div>
            <div class="mensagem-data">
                <div class="msg-usuario">
                    <h1 class="mensagem-usuario">Bem-vindo novamente, Enzo!</h1>
                </div>
                <div class="container-data">
                    <div class="data-mes">
                        <h3 class="dia-mes">27 de janeiro de 2023</h3>
                    </div>
                    <div class="semana-horario">
                        <div class="dia-semana altura-data">segunda-feira</div>
                        <div class="horario altura-data">22:42</div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="itens-cabecalho">
            <div class="item-lista-cabecalho">
                <li class="texto-itens-cabecalho">Registrar</li>
                    <img src="/img/registrar.svg" alt="" id="registrar-item" class="imagem-lista-cabecalho">
            </div>
            <div class="item-lista-cabecalho">    
                <li class="texto-itens-cabecalho">Histórico</li>
                <a href="../historico">
                    <img src="/img/historico.svg" alt="" id="historico-item" class="imagem-lista-cabecalho btnHistorico">
                </a>
            </div>
            <div class="item-lista-cabecalho">    
                <li class="texto-itens-cabecalho">Faturamento</li>
                <a href="../faturamento">
                    <img src="/img/faturamento.svg" alt="" id="faturamento-item" class="imagem-lista-cabecalho btnFaturamento">
                </a>
            </div>
            <div class="item-lista-cabecalho">    
                <li class="texto-itens-cabecalho">Gráficos</li>
                <a href="../graficos">
                    <img src="/img/grafico.svg" alt="" id="graficos-item" class="imagem-lista-cabecalho btnGraficos">
                </a>
            </div>
            <div class="item-lista-cabecalho">
                <li class="texto-itens-cabecalho">Configurações</li>
                <img src="/img/configuracoes.svg" alt="" id="configuracoes-item" class="imagem-lista-cabecalho">
            </div>
        </ul>
        <!-- tem que importar o recurso de formularo no BaseControler -->
        <?= form_open(base_url("/admin/registro/registrar")) ?>
        <div class="pop-up-flexbox">
            <div class="pop-up-registrar">
                <div class="container-flex-digitar">
                    <h1 class="titulo-iniciar-sessao">Placa do veículo</h1>
                    <input class="input-placa-veiculo" id="placa_veiculo" name="placa_veiculo" type="text">
                    <div class="selecao-moto-carro">
                        <div class="radio-selecao carro-radio">
                            <h3>Carro</h3>
                            <input name="veiculo" class="input-radio-btn" type="radio" value="carro" id="id-carro=">
                        </div>
                        <div class="radio-selecao moto-radio">
                            <h3>Moto</h3>
                            <input name="veiculo" class="input-radio-btn" type="radio" value="moto" id="id-moto">
                        </div>
                    </div>
                    <button type="submit" class="btn-padrao-azul btn-registrar-placa-veiculo" id="btn-registro-placa-veiculo">Registrar</button>
                </div>
            </div>
        </div>
        <?= form_close() ?>
        <div class="pop-up-configuracoes">
            <div class="pop-up-config-flexbox">
                <div class="pop-up-config pop-up-ajuda">
                    <h2 class="btn-padrao-config">Preço</h2>
                </div>
                <div class="pop-up-config pop-up-conta">
                    <h2 class="btn-padrao-config">Conta</h2>
                </div>
                <div class="pop-up-config pop-up-sair">
                    <h2 class="btn-padrao-config">Sair</h2>
                </div>
            </div>
        </div>
    </header>
    <main class="conteudo-principal-registro">
        <div class="titulo-registro-container">
            <h1 class="titulo-container-h1-registro">Registros</h1>
        </div>
        <div class="container-registro">
            <?php foreach($estacionamento as $estacionamentos): ?>
            <div class="registro registro-carro">
                <div class="placa-tipo">
                    <div class="placa-veiculo"><?=$estacionamentos["placa_veiculo"]?></div>
                    <img src="/img/<?=$estacionamentos["veiculo"]?>.svg" alt="" class="imagem-veiculo">
                </div>
                <div class="horario horario-registro-2"><?=$estacionamentos["horario_atual"]?></div>
                <a href="/admin/registro/remover/<?= $estacionamentos["idEstacionamento"]?>">
                    <button class="btn-fechar">X</button>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>