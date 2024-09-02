<?php

foreach($esportes as $esporte){
    echo $esporte["modalidade"] . "<br>";
    echo $esporte["ano_olimpiadas"] . "<br>";
}
?>
<button><a href="view\esporte\cadastar.php">cadastar</a></button>
<button><a href="view\esporte\atualizar.php">atualizar</a></button>
<button><a href="view\esporte\deletar.php">deletar</a></button>
<br><br>