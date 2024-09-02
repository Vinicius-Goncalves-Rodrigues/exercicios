<?php

class VendagayModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function estoque($codigo , $nome, $quantidade){
        $sql = "INSERT INTO vendagay(codigo , nome, quantidade) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($codigo , $nome, $quantidade);
    }

    public function listarVendagay(){
        $sql = "SELECT * FROM vendagay";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}