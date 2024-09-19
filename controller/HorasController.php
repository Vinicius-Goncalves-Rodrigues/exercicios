<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/HorasModel.php';
class HorasController {
    private $HorasModel;
    public function __construct($pdo) {
        $this->HorasModel = new HorasModel($pdo);
    }
    public function  criarHora($nome, $data_hora_entrada, $data_hora_saida, $total_horas_diaria, $total_horas_semana ){
        $this->HorasModel->criarHora($nome, $data_hora_entrada, $data_hora_saida, $total_horas_diaria, $total_horas_semana);
    }
    public function listarHoraPorId($id){
        return $this->HorasModel->listarHoraPorId($id);
    }
    public function listarHora(){
        return $this->HorasModel->listarHora();
    }
    public function calcularHoras($id){
        $diff = $this->HorasModel->diffHora($id);
        $total_horas_diaria = $diff->h;
        $total_horas_semana = $diff->h * 5;
        $this->HorasModel->updateHoras($total_horas_diaria, $total_horas_semana, $id);
    }
    public function getLatestId(){
        return $this->HorasModel->getLatestId();
    }

    public function exibirListaHora(){
        $horas = $this->HorasModel->listarHora();
        
        include 'C:\aluno2\xampp\htdocs\exercicios\view\horas\listar.php';
    }
}
?>