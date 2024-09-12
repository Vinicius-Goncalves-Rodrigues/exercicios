<?php

class SupermercadoModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function Cadastrar($cliente, $data_hora, $valor_total, $desconto, $valor_final){
        $sql = "INSERT INTO supermercado( cliente, data_hora, valor_total, desconto, valor_final) VALUES ( ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $cliente, $data_hora, $valor_total, $desconto, $valor_final]);
    }


}