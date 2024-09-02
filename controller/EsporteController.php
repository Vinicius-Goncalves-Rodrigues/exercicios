<?php
require_once 'C:/aluno2/xampp/htdocs/olinpiadas-mvc/model/EsporteModel.php';
class EsporteController{
private $esporteModel;

    public function __construct($pdo){
        $this->esporteModel = new EsporteModel($pdo);
    }

    public function criarEsporte($modalida,$ano_olimpiadas){
        $this->esporteModel->criarEsporte($modalida,$ano_olimpiadas);
    }

    public function listarEsportes(){
        return $this->esporteModel->listarEsportes();
    }

    public function exibirlistaEsportes(){
        $esportes = $this->esporteModel->listarEsportes();
        include 'view/esporte/listar.php';
    }

    public function atualizarEsporte($modalida,$ano_olimpiadas,$id_esporte){
        $this->esporteModel->atualizarEsporte($modalida,$ano_olimpiadas,$id_esporte);
    }

    public function deletarEsporte($id_esporte){
        $this->esporteModel->deletarEsporte($id_esporte);
    }
}   