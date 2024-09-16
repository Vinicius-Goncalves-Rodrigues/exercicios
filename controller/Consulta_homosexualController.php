<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/Consulta_homosexualModel.php';

class Consulta_homosexualController {
    private $Consulta_homosexualModel;

    public function __construct($pdo) {
        $this->Consulta_homosexualModel = new Consulta_homosexualModel($pdo);
    }

    public function reservar($nome_paciente, $nome_medico, $data_hora, $confirmado) {
        $this->Consulta_homosexualModel->reservar($nome_paciente, $nome_medico, $data_hora, $confirmado);
    }

    public function listarConsulta() {
        return $this->Consulta_homosexualModel->listarConsulta();
    }

    public function getLatestid() {
        return $this->Consulta_homosexualModel->getLatestid();
    }

    public function pesquisardata($data_hora) {
        return $this->Consulta_homosexualModel->pesquisardata($data_hora);
    }

    public function pesquisarmedico($nome_medico) {
        return $this->Consulta_homosexualModel->pesquisarmedico($nome_medico);
    }

    public function checarConsulta($nome_paciente, $nome_medico, $data_hora) {
        $pesquisa = $this->Consulta_homosexualModel->pesquisardata($data_hora);
        $pesquisa = $this->Consulta_homosexualModel->pesquisarmedico($nome_medico);
        if (empty($pesquisa)) {
            $this->reservar($nome_paciente,$nome_medico, $data_hora, 'SIM');  // Corrected method call
            return 'SIM';
        } else {
            $this->reservar($nome_paciente,$nome_medico, $data_hora, 'NAO');  // Corrected method call
            return 'NAO';
        }
    }
}
