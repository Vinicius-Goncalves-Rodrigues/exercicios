<?php
foreach($energias as $energia){

    echo $energia["nome_residente"] . "<br>";
    echo $energia["mes"] . "<br>";
    echo $energia["consumo_kwh"] . "<br>";
    echo $energia["tarifa"] . "<br>";
    echo $energia["fatura"] . "<br>";
}
?>
<button><a href="view/energia/cadastrar.php">Cadastrar consumo de energia</a></button>
<br>