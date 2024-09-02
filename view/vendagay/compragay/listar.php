
<?php

foreach($compragays as $compragay){
    echo $compragay["nome"] . "<br>";
    echo $compragay["datacompra"] . "<br>";
    echo $compragay["nomeproduto"] . "<br>";
    echo $compragay["quantidade"] . "<br>";
    echo $compragay["vendarealizada"] . "<br>";
}
?>
<button><a href="view\vendagay\vendas.php">cadastar</a></button>

<br><br>