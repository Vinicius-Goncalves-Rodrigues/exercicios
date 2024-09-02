<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/EventogayModel.php';
class EventogayController{
private $eventogayModel;

    public function __construct($pdo){
        $this->eventogayModel = new EventogayModel($pdo);
    }

    public function criarEventogay($id, $nome, $datagay, $idade, $acompanhado, $autorizado){
        $this->eventogayModel->criarEventogay($id, $nome, $datagay, $idade, $acompanhado, $autorizado);
    }

    public function listarEventogay(){
        return $this->eventogayModel->listarEventogay();
    }

    public function exibirlistarEventogay(){
        $eventogays = $this->eventogayModel->listarEventogay();
        include 'view/eventogay/listar.php';
    }

}   