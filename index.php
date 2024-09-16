<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/config.php';

require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/controller/VendaController.php';
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/controller/EnergiaController.php';
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/controller/HorasController.php';
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/controller/FrequenciaController.php';

echo "<h1>Cadastro de estoque e venda</h1>";
$EstoqueController = new  EstoqueController($pdo);

$EstoqueController->exibirListaEstoque();

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Cadastro de Energia</h1>";
$EnergiaController = new  EnergiaController($pdo);

$EnergiaController->exibirlistarEnergia();

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Cadastro de horas</h1>";
$HorasController = new  HorasController($pdo);

$HorasController->exibirListaHora();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<h1>Cadastro de presença</h1>";
$FrequenciaController = new  FrequenciaController($pdo);

$FrequenciaController->exibirListarFrequencia();

echo "<br>";
echo "<br>";
echo "<br>";


