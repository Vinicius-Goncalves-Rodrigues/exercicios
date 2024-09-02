<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/EventogayModel.php';
class EventogayController{
private $eventogayModel;

    public function __construct($pdo){
        $this->eventogayModel = new EventogayModel($pdo);
    }

    public function cadastrar($rua,$bairro,$numero,$cep,$cidade,$estado,$pais){
        $this->eventogayModel->criarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais);
    }

    public function listarEventogay(){
        return $this->eventogayModel->listarEventogay();
    }

    public function exibirlistarEventogay(){
        $eventogays = $this->eventogayModel->listarEventogay();
        include 'view/eventogay/listar.php';
    }

}   