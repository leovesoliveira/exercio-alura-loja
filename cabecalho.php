<?php
spl_autoload_register(function($nomeDaClasse) {
    require_once("class/".$nomeDaClasse.".php");
});

error_reporting(E_ALL ^ E_NOTICE);
require_once 'mostra-alerta.php';
require_once 'conecta.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Leoves'Store</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta charset="UTF-8">
</head>
<body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">Leoves'Store</a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="produto-lista.php">Produtos</a></li>
                </ul>
            </div>

            <a class="btn btn-success" href="produto-formulario.php">Adicionar</a>
        </div>
    </div>

    <div class="container">
        <div class="all">
        <?php mostraAlerta("danger") ?>
        <?php mostraAlerta("success") ?>
        <?php mostraAlerta("warning") ?>
<!-- FINAL CABEÇALHO -->
