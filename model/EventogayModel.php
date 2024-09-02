<?php

class EventogayModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function Cadastrar($nome, $idade){
        $sql = "INSERT INTO eventogay( nome, idade) VALUES ( ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $nome, $idade]);
    }
    public function checarIdade($id){
        $sql = "SELECT * FROM eventogay where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $idade = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]["idade"];
        $autorizado = "NÃO";
        $acompanhado = "NÃO";
        if ($idade>=16){
            $acompanhado = "SIM";
            $autorizado = "SIM";
        }
        if ($idade>=18){
            $acompanhado = "NÃO";
            $autorizado = "SIM";
        }
        $sql = "UPDATE eventogay SET acompanhado = ?, autorizado = ? WHERE id =?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$acompanhado,$autorizado,$id]);
        return [$acompanhado,$autorizado];
    }

    public function listarEventogay(){
        $sql = "SELECT * FROM eventogay";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLatestid(){
        $sql = "SELECT id FROM eventogay ORDER BY id DESC";
        $stmt =$this->pdo->query($sql);
        $id = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]['id'];
        return $id; 
    }

}