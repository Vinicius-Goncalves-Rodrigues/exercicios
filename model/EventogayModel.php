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
        $sql = $sql = "INSERT INTO eventogay where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $idade = $stmt["idade"];
        $aceitado = "NÃO";
        $acompanhado = "NÃO";
        if ($idade>=16){
            $acompanhado = "SIM";
            $aceitado = "SIM";
        }
        if ($idade>=18){
            $acompanhado = "NÃO";
            $aceitado = "SIM";
        }
    }

    public function listarEventogay(){
        $sql = "SELECT * FROM eventogay";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}