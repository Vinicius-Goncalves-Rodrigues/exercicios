<?php

foreach($Empretimos as $Empretimo){
    echo $Empretimo["cliente"] . "<br>";
    echo $Empretimo["valor"] . "<br>";
    echo $Empretimo["historico_finaceiro"] . "<br>";
    echo $Empretimo["aprovado"] . "<br>";
}