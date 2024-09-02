<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/TreinadorController.php';

$treinadorController = new TreinadorController($pdo);

$treinadores = $treinadorController->listarTreinador();

if(isset($_POST['atualizar_nome']) &&
isset($_POST['atualizar_esporte']) &&
isset($_POST['atualizar_equipe']) &&
isset($_POST['treinador_id'])){
    $treinadorController->atualizarTreinador($_POST
    ['atualizar_nome'], $_POST
    ['atualizar_esporte'], $_POST
    ['atualizar_equipe'], $_POST['treinador_id']);

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
            foreach($treinadores as $treinador):
            ?>
            <option value="<?php echo $treinador['id'];?>"><?php echo $treinador["id"];?></option>
            <?php endforeach ?> 
            <input type="hidden" name="treinador_id" value="<?php echo $treinador['id'];?>">
        </select>
        <input type="text" name="atualizar_nome" placeholder="atualize a nome">
        <input type="text" name="atualizar_esporte" placeholder="atualize o esporte">
        <input type="text" name="atualizar_equipe" placeholder="atualize o equipe">

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>