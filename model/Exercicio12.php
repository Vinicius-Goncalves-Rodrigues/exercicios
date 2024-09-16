<?php

class Exercicio12Model
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;

    }

    public function criarExercicio12($placa_veiculo, $tipo_manutencao, $proxima_revisao, $quilometragem_atual)
    {

        $sql = "INSERT INTO manutencao_veiculos (placa_veiculo, tipo_manutencao, proxima_revisao, quilometragem_atual) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$placa_veiculo, $tipo_manutencao, $proxima_revisao, $quilometragem_atual]);
    }
    public function listarexercicio12s()
    {
        $sql = "SELECT * FROM manutencao_veiculos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}
?>