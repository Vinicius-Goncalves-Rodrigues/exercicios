<?php
foreach($horas as $hora){

    echo $hora["nome"] . "<br>";
    echo $hora["data_hora_entrada"] . "<br>";
    echo $hora["data_hora_saida"] . "<br>";
    echo $hora["total_horas_diaria"] . "<br>";
    echo $hora["total_horas_semana"] . "<br>";
}
?>
<button><a href="view/horas/cadastrar.php">Cadastrar Horas </a></button>
<br>