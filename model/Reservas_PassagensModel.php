<?php

class Reservas_PassagensModel
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function cadastrarReservas_Passagens($nome_usuario, $data_hora, $tipo_transporte, $assento_numero, $assento_reservado)
    {
        $sql = "INSERT INTO reservas_passagens(nome_usuario, data_hora, tipo_transporte, assento_numero, assento_reservado) VALUES(?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_usuario, $data_hora, $tipo_transporte, $assento_numero, $assento_reservado]);
    }
    public function checarMesa($id)
    {
        $sql = "SELECT * FROM reservas_passagens WHERE id_reserva = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    
    }

    public function atualizarmesas($disponivel, $assento_reservado, $id)
    {
        $sql = "UPDATE reservas_passagens SET disponivel = ?, assento_reservado = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$disponivel, $assento_reservado, $id]);
    }
    public function listamesaPorId($id)
    {
        $sql = "SELECT * FROM reservas_passagens WHERE id_reserva = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
    }
    public function getLatestId()
    {
        $sql = "SELECT id_reserva FROM reservas_passagens ORDER BY id_reserva DESC";
        $stmt = $this->pdo->query($sql);
        $id = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]['id_reserva'];
        return $id;
    }
    public function pesquisar($data_hora, $tipo_transporte, $assento_numero){
        $sql = "SELECT id_reserva FROM reservas_passagens WHERE data_hora LIKE ? AND tipo_transporte = ? AND assento_numero = ? AND assento_reservado = 'SIM'";
        $data_hora = str_replace("T", " ", $data_hora);
        $data_hora = $data_hora.":00";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$data_hora, $tipo_transporte, $assento_numero]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}