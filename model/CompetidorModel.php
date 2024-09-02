<?php

class CompetidorModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function criarCompetidor($nome,$idade,$altura,$peso,$cpf,$rg){
        $sql = "INSERT INTO competidor(nome,idade,altura,peso,cpf,rg) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome,$idade,$altura,$peso,$cpf,$rg]);
    }

    public function listarCompetidor(){
        $sql = "SELECT * FROM competidor";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarCompetidor($nome,$idade,$altura,$peso,$cpf,$rg,$id_competidor){
        $sql = "UPDATE competidor SET nome = ?, idade = ?, altura = ?, peso = ?, cpf = ?, rg = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome,$idade,$altura,$peso,$cpf,$rg,$id_competidor]);
    }

    public function deletarCompetidor($id_competidor){
        $sql = "DELETE FROM competidor WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_competidor]);
    }
}