<?php

foreach($treinadores as $treinador){
    echo $treinador["nome"] . "<br>";
    echo $treinador["esporte"] . "<br>";
    echo $treinador["equipe"] . "<br>";
}

?>
<button><a href="view\treinador\cadastar.php">cadastar</a></button>
<button><a href="view\treinador\atualizar.php">atualizar</a></button>
<button><a href="view\treinador\deletar.php">deletar</a></button>
<br><br>