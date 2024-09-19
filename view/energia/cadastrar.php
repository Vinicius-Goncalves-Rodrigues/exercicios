<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
</head>

<body>
    <h1>Cadastrar Consumo De Energia</h1>

    <form method="POST">
        <input type="text" name="nome_residente" placeholder="Nome Do residente" required>
        <input type="text" name="mes" placeholder="Mês" required>
        <input type="text" name="consumo_kwh" placeholder="Consumo" required>
        <input type="text" value="4.00 Tarifa" disabled  name="tarifa" placeholder="Tarifa" required >
        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    
</body>

</html>

<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/EnergiaController.php';


if (isset($_POST["nome_residente"])) {
    $EnergiaController = new EnergiaController($pdo);

    $fatura = $EnergiaController->calcularFatura($_POST['consumo_kwh']);
    $EnergiaController->criarEnergia($_POST["nome_residente"], $_POST["mes"], $_POST["consumo_kwh"], 4,$fatura );

    header("Location: ../../index.php");
}


?>