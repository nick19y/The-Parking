<?php
        $servidor = "localhost";
        $bd = "estacionamento_mariah";
        $usuario = "root";
        $senha = "";
    
        $conexao = new PDO("mysql:host=$servidor; dbname=$bd", $usuario, $senha,
        array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
?>