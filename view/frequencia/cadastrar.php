<?php
$porcentagem_presenca;

// Função para calcular a porcentagem
function calcularPorcentagem($frequenciaEvento, $frequenciaTotal) {
    if ($frequenciaTotal > 0) {
        $porcentagem_presenca = ($frequenciaEvento / $frequenciaTotal) * 100;
        return $porcentagem_presenca;
    } else {
        return 0; // Evitar divisão por zero
    }
}

// Exemplo de uso
$frequenciaEvento = 0; // Número de ocorrências do evento
$frequenciaTotal = 20; // Número total de eventos

$porcentagem_presenca = calcularPorcentagem($frequenciaEvento, $frequenciaTotal);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de frequencia </title>
</head>

<body>
    <h1>Cadastrar frequencia</h1>

    <form method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="datetime-local"  name="data_dia"  >
        <input type="text" name="presenca" placeholder="Presença">
        <input type="text" name="porcentagem_presenca" placeholder="Dias ">
        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    
</body>

</html>

<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/FrequenciaController.php';


if (isset($_POST["nome"]) && isset($_POST["data_dia"]) && isset($_POST["presenca"])) {
    $FrequenciaController = new FrequenciaController($pdo);


    $FrequenciaController->criarFrequencia($_POST["nome"], $_POST["data_dia"], $_POST["presenca"], $porcentagem_presenca );

    header("Location: ../../index.php");
}


?>