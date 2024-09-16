<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/VendagayModel.php';
class VendagayController{
private $vendagayModel;

    public function __construct($pdo){
        $this->vendagayModel = new VendagayModel($pdo);
    }

    public function estoque(){
        $this->vendagayModel->estoque($codigo , $nome, $quantidade);
    }

    public function listarVendagay(){
        return $this->vendagayModel->listarVendagay();
    }

    public function exibirlistarVendagay(){
        $vendagays = $this->vendagayModel->listarVendagay();
        include 'C:/aluno2/xampp/htdocs/exercicios/view/vendagay/listar.php';
    }

}  