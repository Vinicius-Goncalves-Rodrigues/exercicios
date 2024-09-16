<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
</head>

<body>
    <h1>Cadastrar de Tarefa de casa</h1>

    <form method="POST">
        <input type="text" name="tarefa" placeholder="Tarefa">
        <input type="text" name="responsavel" placeholder="Nome do responsavel " >
        <input type="datetime-local" name="data_inicio" placeholder="Data de ínicio">
        <input type="datetime-local" name="data_final" placeholder="Data de encerramento">
        <select name="statuz" id="">
            <option  value="SIM">sim</option>
            <option  value="NÃO">não</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    
</body>

</html>

<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/config.php';
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/controller/TarefacasaController.php';


if (isset($_POST["tarefa"]) && isset($_POST["responsavel"]) && isset($_POST["data_inicio"])&& isset($_POST["data_final"])&& isset($_POST["statuz"])) {
    $TarefacasaController = new TarefacasaController($pdo);


    $TarefacasaController->criarTarefa($_POST["tarefa"], $_POST["responsavel"], $_POST["data_inicio"], $_POST["data_final"], $_POST["statuz"] );

    header("Location: ../../index.php");
}


?>