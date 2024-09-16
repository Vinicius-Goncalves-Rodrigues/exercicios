
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
</head>

<body>
    
    <h1>Cadastrar Venda</h1>

<form method="POST">
    <input type="text" name="nome_comprador" placeholder="Nome">
    <input type="datetime-local                 \" name="datacompra" placeholder="Data da Compra" >
    <input type="text" name="nomeproduto" placeholder="Nome do produto">
    <input type="text" name="quantidade_estoque" placeholder="Quantidade">
    <input type="text" name="vendarealizada" placeholder="Venda Realizada">
    <button type="submit">Enviar</button>
</form>
</body>

</html>

<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/config.php';
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/controller/VendaController.php';


if (isset($_POST["nome_comprador"]) && isset($_POST["datacompra"]) && isset($_POST["nomeproduto"]) && isset($_POST["quantidade_estoque"]) && isset($_POST["vendarealizada"])) {
    $EstoqueController = new EstoqueController($pdo);
    echo"joa";
    $EstoqueController->criarEstoque($_POST["nome_comprador"], $_POST["datacompra"], $_POST["nomeproduto"] , $_POST["quantidade_estoque"], $_POST["vendarealizada"] );

    header('Location: ../../index.php');
}
?>