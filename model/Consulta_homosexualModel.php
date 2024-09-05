<?php

class Consulta_homosexualModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function reservar($nome_paciente, $nome_medico, $data_hora, $confirmado) {
        $sql = "INSERT INTO consulta_homosexual (nome_paciente, nome_medico, data_hora, confirmado) VALUES (?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_paciente, $nome_medico, $data_hora, $confirmado]);
    }

    public function listarConsulta() {
        $sql = "SELECT * FROM consulta_homosexual";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLatestid() {
        $sql = "SELECT id FROM consulta_homosexual ORDER BY id DESC LIMIT 1";
        $stmt = $this->pdo->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['id'] : null;
    }

    public function pesquisardata($data_hora) {
        $sql = "SELECT id FROM consulta_homosexual WHERE data_hora LIKE ? AND confirmado = 'SIM'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$data_hora . '%']);  // Ensure the '%' is used if you want a LIKE match
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pesquisarmedico($nome_medico) {
        $sql = "SELECT id FROM consulta_homosexual WHERE nome_medico LIKE ? AND confirmado = 'SIM'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_medico . '%']);  // Ensure the '%' is used if you want a LIKE match
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}