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
    <input type="datetime-local" name="data_hora" placeholder="data_hora">
    <input type="number" min="0" max="100" name="desconto" placeholder="desconto">
    <input type="number" name="valor_total" placeholder="valor_total">

    <button type="submit">Cadastrar</button>
   </form> 
</body>
</html>

<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/supermercadoController.php';

$Controller = new SupermercadoController($pdo);


if(isset($_POST['cliente'])){
   $valor_total = $_POST['valor_total'];
   $desconto = $_POST['desconto'];
   $desconto2 = 1-($desconto/100);
   $valor_final = $valor_total * $desconto2;

   $Controller->Cadastrar($_POST['cliente'], $_POST['data_hora'], $valor_total, $desconto, $valor_final);
}
if(isset($valor_final)){
   echo "valor : $_POST[valor_total]";
   echo "<br>";
   echo "valor final: $valor_final";
}


?>