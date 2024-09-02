
<?php

require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/EsporteController.php';  
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/TreinadorController.php';  
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/CompetidorController.php';  
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/LocalidadeController.php';  

echo '<h1>esporte</h1>';
$esporteController = new EsporteController($pdo);

$esporteController->exibirlistaEsportes();


echo '<h1>Treinador</h1>';
$TreinadorController = new TreinadorController($pdo);

$TreinadorController->exibirlistaTreinador();

echo '<h1>Competidor</h1>';
$CompetidorController = new CompetidorController($pdo);

$CompetidorController->exibirlistaCompetidor();

echo '<h1>Localidade</h1>';
$LocalidadeController = new LocalidadeController($pdo);

$LocalidadeController->exibirlistaLocalidade();




?>