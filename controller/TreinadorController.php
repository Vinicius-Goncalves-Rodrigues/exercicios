<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/model/TreinadorModel.php';
class TreinadorController{
private $treinadorModel;

    public function __construct($pdo){
        $this->treinadorModel = new treinadorModel($pdo);
    }

    public function criarTreinador($nome,$esporte,$equipe){
        $this->treinadorModel->criarTreinador($nome,$esporte,$equipe);
    }

    public function listarTreinador(){
        return $this->treinadorModel->listarTreinador();
    }

    public function exibirlistaTreinador(){
        $treinadores = $this->treinadorModel->listarTreinador();
        include 'view/treinador/listar.php';
    }

    public function atualizarTreinador($nome,$esporte,$equipe,$id_Treinador){
        $this->treinadorModel->atualizarTreinador($nome,$esporte,$equipe,$id_Treinador);
    }

    public function deletarTreinador($id_Treinador){
        $this->treinadorModel->deletarTreinador($id_Treinador);
    }
}   