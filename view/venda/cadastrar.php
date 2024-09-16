<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
</head>

<body>
    <h1>Cadastrar Estoque</h1>

    <form method="POST">
        <input type="text" name="codigo" placeholder="Código">
        <input type="text" name="nome" placeholder="Nome" >
        <input type="text" name="quantidade" placeholder="Quantidade">
        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    
</body>

</html>

<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/config.php';
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/controller/VendaController.php';


if (isset($_POST["codigo"]) && isset($_POST["nome"]) && isset($_POST["quantidade"])) {
    $VendaController = new VendaController($pdo);


    $VendaController->criarVenda($_POST["codigo"], $_POST["nome"], $_POST["quantidade"] );

    header("Location: ../../index.php");
}


?>