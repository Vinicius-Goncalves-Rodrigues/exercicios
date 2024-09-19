<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/Controller/Exercicio19Controller.php';

$exercicio19Controller = new Exercicio19Controller($pdo);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poupança</title>
</head>
<body>
    <?php $exercicio19Controller->exibirListaPoupancas();?>
</body>
</html>