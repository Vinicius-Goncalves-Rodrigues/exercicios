<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação Poupança</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="deposito_mensal" placeholder="Deposito Mensal" required>
        <input type="number" name="juros" placeholder="Juros">
        <input type="number" name="tempo" placeholder="Tempo">
        <button type="submit">Calcular</button>
    </form>
</body>

</html>

<?php
require_once 'C:\aluno2\xampp\htdocs\exercicios\config.php';
require_once 'C:\aluno2\xampp\htdocs\exercicios\\Controller\Exercicio19Controller.php';

if (
    isset($_POST['deposito_mensal'])
    && isset($_POST['juros'])
    && isset($_POST['tempo'])
) {
    $exercicio19Controller = new Exercicio19Controller($pdo);

    $taxa_juro = $_POST['juros'];
    $deposito_mensal = $_POST['deposito_mensal'];
    $tempo = $_POST['tempo'];

    $taxa_juros = ($deposito_mensal * $taxa_juro * $tempo);

    $vA = $deposito_mensal + $taxa_juros;

    $exercicio19Controller->calcularJuros($_POST['deposito_mensal'], $_POST['juros'], $_POST['tempo'], $vA);
}
?>