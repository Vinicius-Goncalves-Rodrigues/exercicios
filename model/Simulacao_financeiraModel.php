<?php

class Simulacao_financeiraModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function Cadastrar($cliente, $valor_bem, $taxa, $numero_parcelas, $valor_parcela){
        $sql = "INSERT INTO simulacao_financeira( cliente, valor_bem, taxa, numero_parcelas, valor_parcela) VALUES ( ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $cliente, $valor_bem, $taxa, $numero_parcelas, $valor_parcela]);
    }


}