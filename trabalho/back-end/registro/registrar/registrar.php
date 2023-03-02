<?php
    require_once('../conexao/conexao.php');

    $tempoEstacionamento = "";
    // ver como q faz para pegar o tempo atual em sql

    // tirar os campos de linhas comentadas

    // ver se colocar mais um campo com o mesmo nome em outra tabela da ruim em sql
    $placaVeiculo = $_POST["placa_veiculo"];
    $tipoVeiculo = $_POST["veiculo"];

    $sql = "INSERT INTO estacionamento VALUES(0, :placa_veiculo, :veiculo, '2023-10-22 14:45:30', '2023-10-22 14:45:30')";

    $comando = $conexao->prepare($sql);

    $comando->bindValue(":placa_veiculo", $placaVeiculo);
    $comando->bindValue(":veiculo", $tipoVeiculo);

    $comando->execute();

    header("Location: registro.php");
?>