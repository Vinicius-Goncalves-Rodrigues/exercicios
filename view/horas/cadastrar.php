
<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/controller/HorasController.php';


if (isset($_POST["nome"]) && isset($_POST["data_hora_entrada"]) && isset($_POST["data_hora_saida"])){
    
    $HorasController = new HorasController($pdo);

    $HorasController->criarHora($_POST["nome"], $_POST["data_hora_entrada"], $_POST["data_hora_saida"], NULL,NULL);
    $id = $HorasController->getLatestId();
    $HorasController->calcularHoras($id['id']);   
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOras</title>
</head>

<body>
    <h1>Cadastro de Horas dos Funcionarios</h1>
      
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome:">
        <input type="datetime-local" name="data_hora_entrada" placeholder="Data/Hora/entrada" >
        <input type="datetime-local" name="data_hora_saida" placeholder="Data/Hora/saída">
        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    <?php
    if(isset($id)){
        $resultado = $HorasController->listarHoraPorId($id['id']);

        echo "<h1>FOI ENVIADO!</h1>";
        echo "<p>total horas diaria:". $resultado[0]['total_horas_diaria']."</p>";
        echo "<p>total horas semanal:".$resultado[0]['total_horas_semana']."</p>";
    }
    ?>
</body>

</html>
