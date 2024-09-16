<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/model/FrequenciaModel.php';
class FrequenciaController {
    private $FrequenciaModel;
    public function __construct($pdo) {
        $this->FrequenciaModel = new FrequenciaModel($pdo);
    }
    public function  criarFrequencia($nome, $data_dia, $presenca, $porcentagem_presenca ){
        $this->FrequenciaModel->criarFrequencia($nome, $data_dia, $presenca, $porcentagem_presenca);
    }
    public function listarFrequencia(){
        return $this->FrequenciaModel->listarFrequencia();
    }
    public function exibirlistarFrequencia(){
        $frequencias = $this->FrequenciaModel->listarFrequencia();
        include 'C:\aluno2\xampp\htdocs\trabalho-fixo\view\frequencia\listar.php';
    }

}