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
    <input type="number" name="idade" placeholder="idade">

    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/EventogayController.php';

if(isset($_POST["nome"]) &&
 isset($_POST["idade"])){
    $eventogayController = new EventogayController($pdo);

    $eventogayController->Cadastrar($_POST["nome"], $_POST["idade"]);
    

    header("Location: index.php");
 }

 ?>