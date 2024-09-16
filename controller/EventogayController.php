<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/EventogayModel.php';
class EventogayController{
private $eventogayModel;

    public function __construct($pdo){
        $this->eventogayModel = new EventogayModel($pdo);
    }

    public function Cadastrar($nome, $idade){
        $this->eventogayModel->Cadastrar( $nome,$idade);
    }
    public function checarIdade($id){
        $this->eventogayModel->checarIdade($id);
    }

    public function listarEventogay(){
        return $this->eventogayModel->listarEventogay();
    }

    public function exibirlistarEventogay(){
        $eventogays = $this->eventogayModel->listarEventogay();
        include 'C:\aluno2\xampp\htdocs\exercicios\view\eventogay\listar.php';
    }
    public function getLatestid(){
        return $this->eventogayModel->getLatestid();
    }

}   