<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/EventogayModel.php';
class EventogayController{
private $localidadeModel;

    public function __construct($pdo){
        $this->localidadeModel = new LocalidadeModel($pdo);
    }

    public function criarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais){
        $this->localidadeModel->criarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais);
    }

    public function listarLocalidade(){
        return $this->localidadeModel->listarLocalidade();
    }

    public function exibirlistaLocalidade(){
        $localidades = $this->localidadeModel->listarLocalidade();
        include 'view/localidade/listar.php';
    }

    public function atualizarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais,$id_localidade){
        $this->localidadeModel->atualizarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais,$id_localidade);
    }

    public function deletarLocalidade($id_localidade){
        $this->localidadeModel->deletarLocalidade($id_localidade);
    }
}   