<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/EventogayModel.php';
class EventogayController{
private $eventogayModel;

    public function __construct($pdo){
        $this->eventogayModel = new EventogayModel($pdo);
    }

    public function cadastrar($id, $nome, $datagay, $idade, $acompanhado, $autorizado){
        $this->eventogayModel->cadastrar($id, $nome, $datagay, $idade, $acompanhado, $autorizado);
    }
    public function checaridade($id){
        $this->eventogayModel->checaridade($id);
    }

    public function listarEventogay(){
        return $this->eventogayModel->listarEventogay();
    }

    public function exibirlistarEventogay(){
        $eventogays = $this->eventogayModel->listarEventogay();
        include 'C:\aluno2\xampp\htdocs\exercicios\view\eventogay\listar.php';
    }

}   