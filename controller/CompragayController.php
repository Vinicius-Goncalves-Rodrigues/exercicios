<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/CompragayModel.php';
class CompragayController{
private $CompragayModel;

    public function __construct($pdo){
        $this->CompragayModel = new CompragayModel($pdo);
    }

    public function vendas($id , $nome, $datacompra, $nomeproduto, $quantidade, $vendarealizada){
        $this->CompragayModel->vendas($id , $nome, $datacompra, $nomeproduto, $quantidade, $vendarealizada);
    }

    public function listarCompragay(){
        return $this->CompragayModel->listarCompragay();
    }

    public function exibirlistarComprargay(){
        $compragays = $this->CompragayModel->listarCompragay();
        include 'C:\aluno2\xampp\htdocs\exercicios\view\vendagay\compragay\listar.php';
    }

} 