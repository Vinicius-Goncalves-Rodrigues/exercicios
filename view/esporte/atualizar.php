<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/EsporteController.php';

$esporteController = new EsporteController($pdo);

$esportes = $esporteController->listarEsportes();

if(isset($_POST['atualizar_modalidade']) &&
isset($_POST['atualizar_olimpiadas']) &&
isset($_POST['esporte_id'])){
    $esporteController->atualizarEsporte($_POST
    ['atualizar_modalidade'], $_POST
    ['atualizar_olimpiadas'], $_POST['esporte_id']);
    header("Location: ../../index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="esporte_id">
            <?php
            foreach($esportes as $esporte):
            ?>
            <option value="<?php echo $esporte['id'];?>"><?php echo $esporte["id"];?></option>
            <?php endforeach ?> 
            <input type="hidden" name="esporte_id" value="<?php echo $esporte['id'];?>">
        </select>
        <input type="text" name="atualizar_modalidade" placeholder="atualize a modalida">
        <input type="text" name="atualizar_olimpiadas" placeholder="atualize o ano">

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>