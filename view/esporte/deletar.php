<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/EsporteController.php';

$esporteController = new EsporteController($pdo);

$esportes = $esporteController->listarEsportes();

if(isset($_POST['deletar_esporte_id'])){
    $esporteController->deletarEsporte($_POST['deletar_esporte_id']);
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
    <h1>deletar esporte</h1>
    <form method="post">
        <select name="deletar_esporte_id">
            <?php 
            foreach($esportes as $esporte):
            ?>
            <option value="<?php echo $esporte ['id'];?>"><?php echo $esporte['modalidade'];?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">deletar</button>
    </form>
</body>
</html>