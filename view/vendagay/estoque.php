<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>Cadastrar Vendagay</h1>
   <form method="post">
    <input type="text" name="codigo" placeholder="Código">
    <input type="text" name="nome" placeholder="Nome do produto">
    <input type="text" name="quantidade" placeholder="Quantidade disponivel">
    <button type="submit">Cadastrar no estoque</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/VendagayController.php';

if(isset($_POST["codigo"]) &&
 isset($_POST["nome"]) &&
 isset($_POST["quantidade"])){
    $VendagayController = new VendagayController($pdo);

    $VendagayController->estoque($_POST["codigo"], $_POST["nome"], $_POST["quantidade"]);

    header("Location: index.php");
 }

 ?>