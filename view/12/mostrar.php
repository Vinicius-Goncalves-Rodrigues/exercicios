<?php

require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/Controller/Exercicio12.php';

$exercicio12Controller = new Exercicio12Controller($pdo);
$exercicio12Controller->exibirListaexercicio12s();
?>