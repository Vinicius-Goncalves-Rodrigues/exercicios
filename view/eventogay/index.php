<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/EventogayController.php';  

echo '<h1>gay</h1>';
$eventogayController = new EventogayController($pdo);

var_dump($eventogayController->listarEventogay());