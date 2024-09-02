<?php

foreach($localidades as $localidade){
    echo $localidade["rua"] . "<br>";
    echo $localidade["bairro"] . "<br>";
    echo $localidade["numero"] . "<br>";
    echo $localidade["cep"] . "<br>";
    echo $localidade["cidade"] . "<br>";
    echo $localidade["estado"] . "<br>";
    echo $localidade["pais"] . "<br>";
}

?>
<button><a href="view\localidade\cadastar.php">cadastar</a></button>
<button><a href="view\localidade\atualizar.php">atualizar</a></button>
<button><a href="view\localidade\deletar.php">deletar</a></button>
<br><br>