<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/model/CompetidorModel.php';
class CompetidorController{
private $competidorModel;

    public function __construct($pdo){
        $this->competidorModel = new CompetidorModel($pdo);
    }

    public function criarCompetidor($nome,$idade,$altura,$peso,$cpf,$rg){
        $this->competidorModel->criarCompetidor($nome,$idade,$altura,$peso,$cpf,$rg);
    }

    public function listarCompetidor(){
        return $this->competidorModel->listarCompetidor();
    }

    public function exibirlistaCompetidor(){
        $competidores = $this->competidorModel->listarCompetidor();
        include 'view/competidor/listar.php';
    }

    public function atualizarCompetidor($nome,$idade,$altura,$peso,$cpf,$rg,$id_competidor){
        $this->competidorModel->atualizarCompetidor($nome,$idade,$altura,$peso,$cpf,$rg,$id_competidor);
    }

    public function deletarCompetidor($id_competidor){
        $this->competidorModel->deletarCompetidor($id_competidor);
    }
}   