<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index/index.css">
    <link rel="stylesheet" href="css/iniciarSessao/iniciarSessao.css">
    <link rel="stylesheet" href="css/registro/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <script src="js/registro/registro.js" defer></script>
</head>
<body class="corpo-registro">
    <header class="cabecalho-registro">
        <div class="cabecalho-nome-data">
            <div class="imagem-usuario">
                <img src="img/usuario.svg" alt="Imagem do usuário" class="imagem">
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
                <img src="img/registrar.svg" alt="" id="registrar-item" class="imagem-lista-cabecalho">
            </div>
            <div class="item-lista-cabecalho">    
                <li class="texto-itens-cabecalho">Histórico</li>
                <img src="img/historico.svg" alt="" id="historico-item" class="imagem-lista-cabecalho">
            </div>
            <div class="item-lista-cabecalho">    
                <li class="texto-itens-cabecalho">Faturamento</li>
                <img src="img/faturamento.svg" alt="" id="faturamento-item" class="imagem-lista-cabecalho">
            </div>
            <div class="item-lista-cabecalho">    
                <li class="texto-itens-cabecalho">Gráficos</li>
                <img src="img/grafico.svg" alt="" id="graficos-item" class="imagem-lista-cabecalho">
            </div>
            <div class="item-lista-cabecalho">    
                <li class="texto-itens-cabecalho">Configurações</li>
                <img src="img/configuracoes.svg" alt="" id="configuracoes-item" class="imagem-lista-cabecalho">
            </div>
        </ul>

        <!-- pesquisar como fazer para pegar o horario de entrada automaticamente pelo sql -->
        <!-- fazer o php aq -->
        <form class="pop-up-flexbox" method="POST" action="./back-end/registro/registrar/registrar.php">
            <div class="pop-up-registrar">
                <div class="container-flex-digitar">
                    <h1 class="titulo-iniciar-sessao">Placa do veículo</h1>
                    <input name="placa_veiculo" class="input-placa-veiculo" type="text">
                    <div class="selecao-moto-carro">
                        <div class="radio-selecao carro-radio">
                            <h3>Carro</h3>
                            <input name="veiculo" class="input-radio-btn" type="radio" value="carro" id="id-carro" required>
                        </div>
                        <div class="radio-selecao moto-radio">
                            <h3>Moto</h3>
                            <input name="veiculo" class="input-radio-btn" type="radio" value="moto" id="id-moto" required>
                        </div>
                    </div>
                    <button class="btn-padrao-azul btn-registrar-placa-veiculo" id="btn-registro-placa-veiculo">Registrar</button>
                </div>
            </div>
        </form>
        <div class="pop-up-configuracoes">
            <div class="pop-up-config-flexbox">
                <div class="pop-up-config pop-up-ajuda">
                    <h2 class="btn-padrao-config">Ajuda</h2>
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
    <!-- php -S localhost root -->
    <main class="conteudo-principal-registro">
        <div class="titulo-registro-container">
            <h1 class="titulo-container-h1-registro">Registros</h1>
        </div>
        <div class="container-registro" method="POST" action="registro.php">
            <?php
            require_once("./back-end/registro/conexao/conexao.php");
            include "./back-end/registro/funcoes/funcoes.php";
            $sql = "SELECT * FROM estacionamento";
            $comando = $conexao->prepare($sql);
            $comando->execute();
            $dados = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($dados as $estacionamento){
                $veiculoSelecionado = verificarVeiculo($_POST["veiculo"]);
                var_dump($dados);
            }
            ?>

            <!-- echo '
                <div class="registro registro-carro">
                <div class="placa-tipo">
                    <div class="placa-veiculo">' . $estacionamento["placa_veiculo"] . '</div>
                    <img src="img/carro.svg" alt="" class="imagem-veiculo">
                </div>
                <div class="horario horario-registro-2">00:12:53</div>
                <button class="btn-fechar">X</button>
                </div>
                ';
                echo '<div class="registro registro-moto">
                <div class="placa-tipo">
                    <div class="placa-veiculo">' . $estacionamento["placa_veiculo"] . '</div>
                    <img src="img/moto.svg" alt="" class="imagem-veiculo">
                </div>
                <div class="horario horario-registro-2">05:03:08</div>
                <button class="btn-fechar">X</button>
                </div>'; -->

            <!--echo '
                <div class="registro registro-carro">
                <div class="placa-tipo">
                    <div class="placa-veiculo">' . $estacionamento["placa_veiculo"] . '</div>
                    <img src="img/carro.svg" alt="" class="imagem-veiculo">
                </div>
                <div class="horario horario-registro-2">00:12:53</div>
                <button class="btn-fechar">X</button>
                </div>
                ';
             -->
            <!-- <div class="registro registro-carro">
                <div class="placa-tipo">
                    <div class="placa-veiculo">ZYK4R53</div>
                    <img src="img/carro.svg" alt="" class="imagem-veiculo">
                </div>
                <div class="horario horario-registro-2">00:12:53</div>
                <button class="btn-fechar">X</button>
            </div>
            <div class="registro registro-moto">
                <div class="placa-tipo">
                    <div class="placa-veiculo">ZYK4R53</div>
                    <img src="img/moto.svg" alt="" class="imagem-veiculo">
                </div>
                <div class="horario horario-registro-2">05:03:08</div>
                <button class="btn-fechar">X</button>
            </div> -->
        </div>
    </main>
</body>
</html>