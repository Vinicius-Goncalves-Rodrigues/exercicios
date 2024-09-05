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
    <input type="text" name="cliente" placeholder="cliente">
    <input type="datetime-local" name="data_gay" placeholder="data_gay">

    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/RestaurantegayController.php';

$Controller = new RestaurantegayController($pdo);

if(isset($_POST["cliente"])){
   $reservado = $Controller->checarrestaurante($_POST["cliente"], $_POST["data_gay"]);
}

    if(isset($reservado)){
      if($reservado == "SIM"){
         echo "<h1>sua mesa ta boa</h1>";
      }else{
         echo "<h1>se fudeu</h1>";
      }
    }

 ?>