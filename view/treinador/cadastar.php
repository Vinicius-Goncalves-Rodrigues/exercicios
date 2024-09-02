<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>Cadastrar treinador</h1>
   <form method="post">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="esporte" placeholder="esporte">
    <input type="text" name="equipe" placeholder="equipe">
    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/TreinadorController.php';

if(isset($_POST["nome"]) &&
 isset($_POST["esporte"]) &&
 isset($_POST["equipe"])){
    $TreinadorController = new TreinadorController($pdo);

    $TreinadorController->criarTreinador($_POST["nome"], $_POST["esporte"], $_POST["equipe"]);

    header("Location: ../../index.php");
 }

 ?>