<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/Empretimo_heteroModel.php';
class Empretimo_heteroController{
private $Empretimo_heteroModel;

    public function __construct($pdo){
        $this->Empretimo_heteroModel = new Empretimo_heteroModel($pdo);
    }

    public function Cadastrar($cliente, $valor, $historico_finaceiro, $aprovado){
        $this->Empretimo_heteroModel->Cadastrar( $cliente,$valor,$historico_finaceiro, $aprovado);
    }
    public function exibirlistarEmpretimo() {
        $Empretimos = $this->Empretimo_heteroModel->listarEmpretimo_hetero();
        include 'C:\aluno2\xampp\htdocs\exercicios\view\Empretimo_heteroModel\listar.php';
    }
    public function checarEmpretimo($cliente, $valor, $historico_finaceiro){
        return $this->Empretimo_heteroModel->checarEmpretimo( $cliente, $valor, $historico_finaceiro);
    }

    public function listarEmpretimo_hetero(){
        return $this->Empretimo_heteroModel->listarEmpretimo_hetero();
    }
    public function getLatestid(){
        return $this->Empretimo_heteroModel->getLatestid();
    }

}   