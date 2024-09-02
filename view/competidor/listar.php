<?php

foreach($competidores as $competidor){
    echo $competidor["nome"] . "<br>";
    echo $competidor["idade"] . "<br>";
    echo $competidor["altura"] . "<br>";
    echo $competidor["peso"] . "<br>";
    echo $competidor["cpf"] . "<br>";
    echo $competidor["rg"] . "<br>";
}

?>
<button><a href="view\competidor\cadastar.php">cadastar</a></button>
<button><a href="view\competidor\atualizar.php">atualizar</a></button>
<button><a href="view\competidor\deletar.php">deletar</a></button>
<br><br>