<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/model/EventogayModel.php';
class EventogayController{
private $eventogayModel;

    public function __construct($pdo){
        $this->eventogayModel = new EventogayModel($pdo);
    }

    public function criarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais){
        $this->eventogayModel->criarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais);
    }

    public function listarLocalidade(){
        return $this->eventogayModel->listarLocalidade();
    }

    public function exibirlistaLocalidade(){
        $localidades = $this->eventogayModel->listarLocalidade();
        include 'view/localidade/listar.php';
    }

    public function atualizarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais,$id_localidade){
        $this->eventogayModel->atualizarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais,$id_localidade);
    }

    public function deletarLocalidade($id_localidade){
        $this->eventogayModel->deletarLocalidade($id_localidade);
    }
}   