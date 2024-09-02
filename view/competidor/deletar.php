<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/CompetidorController.php';

$competidorController = new CompetidorController($pdo);

$competidores = $competidorController->listarCompetidor();

if(isset($_POST['deletar_competidor_id'])){
    $competidorController->deletarCompetidor($_POST['deletar_competidor_id']);
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
    <h1>deletar competidor</h1>
    <form method="post">
        <select name="deletar_competidor_id">
            <?php 
            foreach($competidores as $competidor):
            ?>
            <option value="<?php echo $competidor ['id'];?>"><?php echo $competidor['nome'];?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">deletar</button>
    </form>
</body>
</html>