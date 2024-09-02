<?php
include_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
include_once 'C:/aluno2/xampp/htdocs/exercicios/controller/VendagayController.php';

$Controller = new VendagayController($pdo);

$Controller->exibirlistarVendagay();