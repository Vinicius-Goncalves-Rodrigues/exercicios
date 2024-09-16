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
    <input type="number" name="valor" placeholder="valor">
    <input type="number" name="historico_finaceiro" placeholder="historico_finaceiro">

    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/empretimo_heteroController.php';

$Controller = new Empretimo_heteroController($pdo);

if(isset($_POST["cliente"])){
   $reservado = $Controller->checarEmpretimo( $_POST["cliente"], $_POST["valor"], $_POST["historico_finaceiro"]);
}

    if(isset($reservado)){
      if($reservado == "SIM"){
         echo "<h1>receba</h1>";
      }else{
         echo "<h1>se fudeu</h1>";
      }
    }

 ?>