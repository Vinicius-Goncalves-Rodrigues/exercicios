<?php

class EsporteModel {
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function criarEsporte($modalidade,$ano_olimpiadas){
        $sql = "INSERT INTO esporte(modalidade, ano_olimpiadas) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$modalidade, $ano_olimpiadas]);
    }

    public function listarEsportes(){
        $sql = "SELECT * FROM esporte";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarEsporte($modalida,$ano_olimpiadas,$id_esporte){
        $sql = "UPDATE esporte SET modalidade = ?, ano_olimpiadas = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$modalida,$ano_olimpiadas,$id_esporte]);
    }

    public function deletarEsporte($id_esporte){
        $sql = "DELETE FROM esporte WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_esporte]);
    }
}