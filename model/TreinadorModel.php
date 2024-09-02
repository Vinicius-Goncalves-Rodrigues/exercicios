<?php

class TreinadorModel {
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function criarTreinador($nome,$esporte,$equipe){
        $sql = "INSERT INTO treinador(nome,esporte,equipe) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome,$esporte,$equipe]);
    }

    public function listarTreinador(){
        $sql = "SELECT * FROM treinador";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarTreinador($nome,$esporte,$equipe,$id_Treinador){
        $sql = "UPDATE treinador SET nome = ?, esporte = ?,equipe = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome,$esporte,$equipe,$id_Treinador]);
    }

    public function deletarTreinador($id_Treinador){
        $sql = "DELETE FROM treinador WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_Treinador]);
    }
}