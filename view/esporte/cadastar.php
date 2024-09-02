<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>Cadastrar Esporte</h1>
   <form method="post">
    <input type="text" name="modalidade" placeholder="Modalidade">
    <input type="text" name="ano_olimpiadas" placeholder="Ano Olimpiadas" maxlength="4">
    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/EsporteController.php';

if(isset($_POST["modalidade"]) &&
 isset($_POST["ano_olimpiadas"])){
    $esporteController = new EsporteController($pdo);

    $esporteController->criarEsporte($_POST["modalidade"], $_POST["ano_olimpiadas"]);

    header("Location: ../../index.php");
 }

 ?>