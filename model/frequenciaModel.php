<?php

class FrequenciaModel {
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;

    }
    public function criarFrequencia($nome, $data_dia, $presenca, $porcentagem_presenca){
        $sql= "INSERT INTO frequencia(nome, data_dia, presenca, porcentagem_presenca) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $data_dia, $presenca, $porcentagem_presenca]);
    }
    
    public function listarFrequencia(){
        $sql = "SELECT * FROM frequencia";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function checar( $nome, $data_dia, $presenca, $porcentagem_presenca){
        if ($presenca == $presenca){
            $presenca = "SIM";
        }
        else{
            $presenca = "NÃO";
        }
        $this->criarFrequencia($nome, $data_dia, $presenca, $porcentagem_presenca);
        return $presenca;
    }
}