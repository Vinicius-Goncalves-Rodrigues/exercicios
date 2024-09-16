<?php

class EnergiaModel {
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;

    }
    public function criarEnergia($nome_residente, $mes, $consumo_kwh, $tarifa, $fatura){
        $sql= "INSERT INTO energia(nome_residente, mes, consumo_kwh, tarifa, fatura) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_residente, $mes, $consumo_kwh, $tarifa, $fatura]);
    }
   
    public function listarEnergia(){
        $sql = "SELECT * FROM energia";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    
}
?>