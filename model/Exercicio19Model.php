<?php

class Exercicio19Model
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;

    }

    public function calcularJuros($deposito_mensal, $taxa_juro, $tempo, $vA)
    {

        $sql = "INSERT INTO simulacao_poupanca (deposito_mensal, taxa_juros, tempo, valor_acumulado) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$deposito_mensal, $taxa_juro, $tempo, $vA]);
    }

    public function calcularvA($deposito_mensal, $taxa_juro)
    {
        $sql = "INSERT INTO simulacao_poupanca (deposito_mensal, taxa_juros) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$deposito_mensal, $taxa_juro]);
    }
    public function listarPoupancas()
    {
        $sql = "SELECT * FROM simulacao_poupanca";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}
?>