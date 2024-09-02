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
    public function checaridade($id){
        $sql = "SELECT * FROM eventogay where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $idade = $stmt["idade"];
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
    }

    public function listarEventogay(){
        $sql = "SELECT * FROM eventogay";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}