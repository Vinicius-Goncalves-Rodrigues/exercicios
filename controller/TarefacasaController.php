<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/model/TarefacasaModel.php';
class TarefacasaController {
    private $TarefacasaModel;
    public function __construct($pdo) {
        $this->TarefacasaModel = new TarefacasaModel($pdo);
    }
    public function  criarTarefa( $tarefa, $responsavel, $data_inicio, $data_final, $statuz){
        $this->TarefacasaModel->criarTarefa($tarefa, $responsavel, $data_inicio, $data_final, $statuz);
    }
    public function listarTarefa(){
        return $this->TarefacasaModel->listarTarefa();
    }
   
    public function exibirListaTarefa(){
        $Tarefacasas = $this->TarefacasaModel->listarTarefa();
      
        include 'C:\aluno2\xampp\htdocs\trabalho-fixo\view\tarefacasa\listar.php';
    }

}