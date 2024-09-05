<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
   <h1>reservar gay</h1>
   <form method="post">
    <input type="text" name="nome_paciente" placeholder="nome_paciente">
    <input type="text" name="nome_medico" placeholder="nome_medico">
    <input type="datetime-local" name="data_hora" placeholder="data_hora">

    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/Consulta_homosexualController.php';

$Controller = new Consulta_homosexualController($pdo);

if(isset($_POST["nome_paciente"])){
   $reservado = $Controller->checarConsulta($_POST["nome_paciente"], $_POST["data_hora"], $_POST["nome_medico"]);
}

    if(isset($reservado)){
      if($reservado == "SIM"){
         echo "<h1>sua mesa ta boa</h1>";
      }else{
         echo "<h1>se fudeu</h1>";
      }
    }

 ?>