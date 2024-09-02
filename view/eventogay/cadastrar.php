<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>Cadastrar Localidade</h1>
   <form method="post">
    <input type="text" name="rua" placeholder="rua">
    <input type="text" name="bairro" placeholder="bairro">
    <input type="text" name="numero" placeholder="numero">
    <input type="text" name="cep" placeholder="cep">
    <input type="text" name="cidade" placeholder="cidade">
    <input type="text" name="estado" placeholder="estado">
    <input type="text" name="pais" placeholder="pais">
    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/LocalidadeController.php';

if(isset($_POST["rua"]) &&
 isset($_POST["bairro"]) &&
 isset($_POST["numero"]) &&
 isset($_POST["cep"]) &&
 isset($_POST["cidade"]) &&
 isset($_POST["estado"]) &&
 isset($_POST["pais"])){
    $LocalidadeController = new LocalidadeController($pdo);

    $LocalidadeController->criarLocalidade($_POST["rua"], $_POST["bairro"], $_POST["numero"],$_POST["cep"], $_POST["cidade"], $_POST["estado"], $_POST["pais"]);

    header("Location: ../../index.php");
 }

 ?>