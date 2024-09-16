<?php
foreach($vendas as $venda){

    echo $venda["codigo"] . "<br>";
    echo $venda["nome"] . "<br>";
    echo $venda["quantidade"] . "<br>";
}
?>
<button><a href="view/venda/cadastrar.php">Cadastrar Estoque</a></button>
<br>
<?php
foreach($estoques as $estoque){

    echo $estoque["nome_comprador"] . "<br>";
    echo $estoque["datacompra"] . "<br>";
    echo $estoque["nomeproduto"] . "<br>";
    echo $estoque["quantidade_estoque"] . "<br>";
    echo $estoque["vendarealizada"] . "<br>";
   
}
?>
<br>
<button><a href="view/venda/cadastrarvenda.php">Cadastrar Venda</a></button>
<br>