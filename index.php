
<?php

require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/EsporteController.php';  
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/TreinadorController.php';  
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/CompetidorController.php';  
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/LocalidadeController.php';  

echo '<h1>esporte</h1>';
$esporteController = new EsporteController($pdo);

$esporteController->exibirlistaEsportes();


?>