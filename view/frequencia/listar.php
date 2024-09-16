<?php
foreach($frequencias as $frequencia){

    echo $frequencia["nome"] . "<br>";
    echo $frequencia["data_dia"] . "<br>";
    echo $frequencia["presenca"] . "<br>";
    echo $frequencia["porcentagem_presenca"] . "<br>";
}
?>
<button><a href="view/frequencia/cadastrar.php">Cadastrar Presença</a></button>
<br>
