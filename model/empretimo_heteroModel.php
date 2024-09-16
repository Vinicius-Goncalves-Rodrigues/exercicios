<?php

class Empretimo_heteroModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function Cadastrar($cliente, $valor, $historico_finaceiro, $aprovado){
        $sql = "INSERT INTO empretimo_hetero( cliente, valor, historico_finaceiro, aprovado) VALUES ( ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $cliente, $valor, $historico_finaceiro, $aprovado]);
    }
    public function checar( $cliente, $valor, $historico_finaceiro){
        if ($valor <= $historico_finaceiro){
            $aprovado = "SIM";
        }
        else{
            $aprovado = "NÃO";
        }
        $this->Cadastrar($cliente, $valor, $historico_finaceiro, $aprovado);
        return $aprovado;
    }

    public function listarEmpretimo_hetero(){
        $sql = "SELECT * FROM empretimo_hetero";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLatestid(){
        $sql = "SELECT id FROM empretimo_hetero ORDER BY id DESC";
        $stmt =$this->pdo->query($sql);
        $id = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]['id'];
        return $id; 
    }

}