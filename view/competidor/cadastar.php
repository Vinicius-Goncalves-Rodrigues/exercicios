<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>Cadastrar competidor</h1>
   <form method="post">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="idade" placeholder="idade">
    <input type="text" name="altura" placeholder="altura">
    <input type="text" name="peso" placeholder="peso">
    <input type="text" name="cpf" placeholder="cpf">
    <input type="text" name="rg" placeholder="rg">
    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/CompetidorController.php';

if(isset($_POST["nome"]) &&
 isset($_POST["idade"]) &&
 isset($_POST["altura"]) &&
 isset($_POST["peso"]) &&
 isset($_POST["cpf"]) &&
 isset($_POST["rg"])){
    $CompetidorController = new CompetidorController($pdo);

    $CompetidorController->criarCompetidor($_POST["nome"], $_POST["idade"], $_POST["altura"],$_POST["peso"], $_POST["cpf"], $_POST["rg"]);

    header("Location: ../../index.php");
 }

 ?>