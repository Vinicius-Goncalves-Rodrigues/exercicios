<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/supermercadoModel.php';
class Simulacao_financeiraController{
private $Simulacao_financeiraModel;

    public function __construct($pdo){
        $this->Simulacao_financeiraModel = new Simulacao_financeiraModel($pdo);
    }

    public function Cadastrar($cliente, $valor_bem, $taxa, $numero_parcelas, $valor_parcela){
        $this->Simulacao_financeiraModel->Cadastrar($cliente, $valor_bem, $taxa, $numero_parcelas, $valor_parcela);
    }


}