<?php

foreach($vendagays as $vendagay){
    echo $vendagay["codigo"] . "<br>";
    echo $vendagay["nome"] . "<br>";
    echo $vendagay["quantidade"] . "<br>";
}
?>
<button><a href="view\vendagay\estoque">cadastar estoque</a></button>

<br><br>

<?php

foreach($compragays as $compragay){
    echo $$compragay["codigo"] . "<br>";
    echo $$compragay["nome"] . "<br>";
    echo $$compragay["quantidade"] . "<br>";
}
?>
<button><a href="view\vendagay\estoque">cadastar</a></button>

<br><br>