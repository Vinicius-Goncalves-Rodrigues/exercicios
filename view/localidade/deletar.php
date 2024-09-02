<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/LocalidadeController.php';

$localidadeController = new LocalidadeController($pdo);

$localidades = $localidadeController->listarLocalidade();

if(isset($_POST['deletar_Localidade_id'])){
    $localidadeController->deletarLocalidade($_POST['deletar_Localidade_id']);
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
    <h1>deletar localidade</h1>
    <form method="post">
        <select name="deletar_Localidade_id">
            <?php 
            foreach($localidades as $localidade):
            ?>
            <option value="<?php echo $localidade ['id'];?>"><?php echo $localidade['rua'];?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">deletar</button>
    </form>
</body>
</html>