<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/config.php';
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/controller/LocalidadeController.php';

$localidadeController = new LocalidadeController($pdo);

$localidades = $localidadeController->listarLocalidade();

if(isset($_POST['atualizar_rua']) &&
isset($_POST['atualizar_bairro']) &&
isset($_POST['atualizar_numero']) &&
isset($_POST['atualizar_cep']) &&
isset($_POST['atualizar_cidade']) &&
isset($_POST['atualizar_estado']) &&
isset($_POST['atualizar_pais']) &&
isset($_POST['localidade_id'])){
    $localidadeController->atualizarLocalidade($_POST
    ['atualizar_rua'], $_POST
    ['atualizar_bairro'], $_POST
    ['atualizar_numero'], $_POST
    ['atualizar_cep'], $_POST
    ['atualizar_cidade'], $_POST
    ['atualizar_estado'], $_POST
    ['atualizar_pais'], $_POST['localidade_id']);

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
            foreach($localidades as $localidade):
            ?>
            <option value="<?php echo $localidade['id'];?>"><?php echo $localidade["id"];?></option>
            <?php endforeach ?> 
            <input type="hidden" name="localidade_id" value="<?php echo $localidade['id'];?>">
        </select>
        <input type="text" name="atualizar_rua" placeholder="atualize a rua">
        <input type="text" name="atualizar_bairro" placeholder="atualize o bairro">
        <input type="text" name="atualizar_numero" placeholder="atualize o numero">
        <input type="text" name="atualizar_cep" placeholder="atualize a cep">
        <input type="text" name="atualizar_cidade" placeholder="atualize o cidade">
        <input type="text" name="atualizar_estado" placeholder="atualize o estado">
        <input type="text" name="atualizar_pais" placeholder="atualize a nome">

        
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>