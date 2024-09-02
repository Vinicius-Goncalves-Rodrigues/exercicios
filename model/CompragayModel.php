<?php

class CompragayModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function cadastrar($id , $nome, $datacompra, $nomeproduto, $quantidade, $vendarealizada){
        $sql = "INSERT INTO copragay(id , nome, datacompra, nomeproduto, quantidade, vendarealizada) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id , $nome, $datacompra, $nomeproduto, $quantidade, $vendarealizada]);
    }
   

    public function listarCompragay(){
        $sql = "SELECT * FROM eventogay";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}