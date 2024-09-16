<?php
require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/config.php';
require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/Exercicio15/Controller/Exercicio15Controller.php';

$exercicio15Controller = new Exercicio15Controller(pdo: $pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_usuario = $_POST['nome_usuario'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $local = $_POST['local'];
    $descricao_evento = $_POST['descricao_evento'];

    $resultado = $exercicio15Controller->cadastrarAfazer($nome_usuario, $data, $hora, $local, descricao_evento: $descricao_evento);
    if ($resultado) {
        header('Location:index.php');

        exit();
    } else {
        echo "Erro ao cadastrar";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar a Fazer</title>
</head>

<body>
    <h2>Cadastrar a fazer</h2>
    <form method="POST">
        <label for="nome_usuario">Nome do Usuário:</label>
        <input type="text" name="nome_usuario" id="nome_usuario" required>

        <label for="hora">Hora:</label>
        <input type="date" name="hora" id="hora" required>

        <label for="data">Data:</label>
        <input type="time" name="data" id="data" required>

        <label for="local">Local:</label>
        <input type="text" name="local" id="local" required>

        <label for="decricao_evento">Descricção Eventos:</label>
        <input type="text" name="descricao_evento" id="descricao_evento" required>
        <button type="submit">Enviar</button>
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>