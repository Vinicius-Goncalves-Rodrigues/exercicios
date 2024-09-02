<?php

class EventogayModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function cadastrar($id, $nome, $datagay, $idade, $acompanhado, $autorizado){
        $sql = "INSERT INTO eventogay(id, nome, datagay, idade, acompanhado, autorizado) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id, $nome, $datagay, $idade, $acompanhado, $autorizado]);
    }

    public function listarEventogay(){
        $sql = "SELECT * FROM eventogay";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}