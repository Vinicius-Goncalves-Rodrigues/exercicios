<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/CompragayModel.php';
class CompragayController{
private $compragayModel;

    public function __construct($pdo){
        $this->compragayModel = new CompragayModel($pdo);
    }

    public function estoque($id , $nome, $datacompra, $nomeproduto, $quantidade, $vendarealizada){
        $this->CompragayModel->estoque($id , $nome, $datacompra, $nomeproduto, $quantidade, $vendarealizada);
    }

    public function listarCompragay(){
        return $this->CompragayModel->listarCompragay();
    }

    public function exibirlistarComprargay(){
        $compragays = $this->CompragayModel->listarCompragay();
        include 'view/vendagay/listar.php';
    }

} 