<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>Cadastrar gay</h1>
   <form method="post">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="datagay" placeholder="datagay">
    <input type="text" name="idade" placeholder="idade">
    <input type="text" name="acompanhado" placeholder="acompanhado">
    <input type="text" name="autorizado" placeholder="autorizado">

    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/EventogayController.php';

if(isset($_POST["nome"]) &&
 isset($_POST["datagay"]) &&
 isset($_POST["idade"]) &&
 isset($_POST["acompanhado"]) &&
 isset($_POST["autorizado"])){
    $EventogayController = new EventogayController($pdo);

    $EventogayController->cadastrar($_POST["nome"], $_POST["datagay"], $_POST["idade"],$_POST["acompanhado"], $_POST["autorizado"]);

    header("Location: index.php");
 }

 ?>