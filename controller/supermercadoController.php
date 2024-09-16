<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/supermercadoModel.php';
class SupermercadoController{
private $SupermercadoModel;

    public function __construct($pdo){
        $this->SupermercadoModel = new SupermercadoModel($pdo);
    }

    public function Cadastrar($cliente, $data_hora, $valor_total, $desconto, $valor_final){
        $this->SupermercadoModel->Cadastrar($cliente, $data_hora, $valor_total, $desconto, $valor_final);
    }


}