<h1>Poupança</h1>
<a href="calcularJuros.php">Calcular</a>
<?php
foreach ($poupancas as $poupanca) {
    echo "<br>". "Data: " . $poupanca["deposito_mensal"] . "<br>";
    echo "Taxa de Juros: " . $poupanca["taxa_juros"] . "<br>";
    echo "Tempo: " . $poupanca["tempo"] . "<br>";
    echo "Valor Acumulado: " . $poupanca["valor_acumulado"] . "<br>";
    echo "-----------------------------------------------------------------------------"."<br>";
}
?>
