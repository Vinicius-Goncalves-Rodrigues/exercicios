<?php
foreach($Tarefacasas as $Tarefacasa){

    echo $Tarefacasa["tarefa"] . "<br>";
    echo $Tarefacasa["responsavel"] . "<br>";
    echo $Tarefacasa["data_inicio"] . "<br>";
    echo $Tarefacasa["data_final"] . "<br>";
    echo $Tarefacasa["statuz"] . "<br>";
}
?>
<button><a href="view/tarefacasa/cadastrar.php">Cadastrar tarefa</a></button>
<br>