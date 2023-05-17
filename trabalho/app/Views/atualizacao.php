<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/css/atualizacao/atualizacao.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alteração</title>
</head>
<body>
    <main>
        <div class="div-at1">
            <div class="div-at2">
                <h1 class="first-h1">Atualizacao de Dados</h1>
                <form action="/admin/atualizacao/salvarDadosFuncionario" class="formulario">
                    <label for="nome" class="label-nome">Nome:</label>
                    <input type="text" id="nome" class="nome" placeholder="Digite o seu nome" name="nome">
                    
                    <label for="email" class="label-email">E-mail:</label>
                    <input type="email" id="email" class="email" placeholder="Digite o seu email" name="email">
                    
                    <label for="senha" class="label-senha">Senha:</label>
                    <input type="password" id="senha" class="senha" placeholder="Digite a sua senha" name="senha">
                    
                    <div class="div-button">
                        <button type="submit">Enviar</button>
                    </div>
                    <?php if (session()->has("tipo")) : ?>
                    <div class="alert alert-<?= session("tipo") ?> mt-2" role="alert">
                        <?= session("mensagem") ?>
                    </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
        <div class="div-at2">
            <div>
                <h1 class="first-h1">Atualização de preço</h1>
                <form action="<?= base_url("/admin/atualizacao/salvarPreco")?>" class="formulario">
                    <div class="div-preco">
                        
                        <form action="" class="formulario">
                            <label for="carro" class="label-carro">Carro:</label>
                            <input type="text" id="carro" class="carro" placeholder="digite o valor" name="carro">
                            
                            <label for="moto" class="label-carro">Moto:</label>
                            <input type="moto" id="moto" class="moto" placeholder="Digite o valor" name="moto">
                            
                            <div class="div-button">
                                <button type="submit" class="botao">Atualizar</button>
                            </div>
                            
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </main>
    </html>