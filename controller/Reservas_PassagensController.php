<?php
require_once __DIR__.'\..\model\Reservas_PassagensModel.php';
class Reservas_PassagensController {
private $Reservas_PassagensModel;   
    public function __construct($pdo) {
        $this->Reservas_PassagensModel = new Reservas_PassagensModel($pdo);
    }
    public function cadastrarReservas_Passagens($nome_cliente, $data_hora, $tipo_transporte, $assento_numero, $assento_reservado){
        $this->Reservas_PassagensModel->cadastrarReservas_Passagens($nome_cliente,$data_hora, $tipo_transporte, $assento_numero, $assento_reservado);
    }
    public function checarmesas($id) {
        $this->Reservas_PassagensModel->checarmesa($id);
    }
    public function listaEventoPorId($id){
        return $this->Reservas_PassagensModel->listamesaPorId($id);
    }
    public function getLatestId(){
        return $this->Reservas_PassagensModel->getLatestId();
    }
    public function pesquisar($data_hora,$tipo_transporte, $assento_numero){
        return $this->Reservas_PassagensModel->pesquisar($data_hora,$tipo_transporte, $assento_numero);
    }
    public function reservarTransporte($nome_cliente,$data_hora, $tipo_transporte, $assento_numero){
        $pesquisa = $this->pesquisar($data_hora, $tipo_transporte, $assento_numero);
        if(sizeof($pesquisa) == 0){
            $this->cadastrarReservas_Passagens($nome_cliente, $data_hora, $tipo_transporte, $assento_numero, 'SIM');
            return 'SIM';
        }else{
            $this->cadastrarReservas_Passagens($nome_cliente, $data_hora, $tipo_transporte, $assento_numero, 'NAO');
            return 'NAO';
        }
    }
}