<?php

require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/config.php';
require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/Exercicio12/Controller/Exercicio12.php';

$exercicio12Controller = new Exercicio12Controller($pdo);
$exercicio12Controller->exibirListaexercicio12s();
?>