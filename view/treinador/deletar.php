<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/TreinadorController.php';

$treinadorController = new TreinadorController($pdo);

$treinadores = $treinadorController->listarTreinador();

if(isset($_POST['deletar_treinadores_id'])){
    $treinadorController->deletarTreinador($_POST['deletar_treinadores_id']);
    header("Location: ../../index.php");
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletar</title>
</head>
<body>
    <h1>deletar treinador</h1>
    <form method="post">
        <select name="deletar_treinadores_id">
            <?php 
            foreach($treinadores as $treinador):
            ?>
            <option value="<?php echo $treinador ['id'];?>"><?php echo $treinador['nome'];?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">deletar</button>
    </form>
</body>
</html>