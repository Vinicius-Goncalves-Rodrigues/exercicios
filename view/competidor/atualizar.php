<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/CompetidorController.php';

$competidorController = new CompetidorController($pdo);

$competidores = $competidorController->listarCompetidor();

if(isset($_POST['atualizar_nome']) &&
isset($_POST['atualizar_idade']) &&
isset($_POST['atualizar_altura']) &&
isset($_POST['atualizar_peso']) &&
isset($_POST['atualizar_cpf']) &&
isset($_POST['atualizar_rg']) &&
isset($_POST['competidor_id'])){
    $competidorController->atualizarCompetidor($_POST
    ['atualizar_nome'], $_POST
    ['atualizar_idade'], $_POST
    ['atualizar_altura'], $_POST
    ['atualizar_peso'], $_POST
    ['atualizar_cpf'], 
    ['atualizar_rg'], $_POST['competidor_id']);

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
        <select name="id">
            <?php
            foreach($competidores as $competidor):
            ?>
            <option value="<?php echo $competidor['id'];?>"><?php echo $competidor["id"];?></option>
            <?php endforeach ?> 
            <input type="hidden" name="competidor_id" value="<?php echo $competidor['id'];?>">
        </select>
        <input type="text" name="atualizar_nome" placeholder="atualize a nome">
        <input type="text" name="atualizar_idade" placeholder="atualize o esporte">
        <input type="text" name="atualizar_altura" placeholder="atualize o equipe">
        <input type="text" name="atualizar_peso" placeholder="atualize a nome">
        <input type="text" name="atualizar_cpf" placeholder="atualize o esporte">
        <input type="text" name="atualizar_equipe" placeholder="atualize o equipe">
        <input type="text" name="atualizar_rg" placeholder="atualize a nome">

        
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>