<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>Cadastrar compragay</h1>
   <form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="datacompra" placeholder="Data">
    <input type="text" name="nomeproduto" placeholder="Nome do produto">
    <input type="text" name="quantidade" placeholder="Quantidade disponivel">
    <input type="text" name="vendarealizada" placeholder="Venda Realizada">
    <button type="submit">Cadastrar no estoque</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/CompragayController.php';

if(isset($_POST["nome"]) &&
 isset($_POST["datacompra"]) &&
 isset($_POST["nomeproduto"]) &&
 isset($_POST["quantidade"]) &&
 isset($_POST["vendarealizada"])){
    $CompragayController = new CompragayController($pdo);

    $CompragayController->vendas($_POST["nome"], $_POST["datacompra"], $_POST["nomeproduto"], $_POST["quantidade"], $_POST["vendarealizada"]);

    header("Location: index.php");
 }

 ?>