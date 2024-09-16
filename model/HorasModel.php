<?php

class HorasModel {
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;

    }
    public function criarHora($nome, $data_hora_entrada, $data_hora_saida, $total_horas_diaria, $total_horas_semana){
        $sql= "INSERT INTO horas(nome, data_hora_entrada, data_hora_saida, total_horas_diaria, total_horas_semana) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $data_hora_entrada, $data_hora_saida, $total_horas_diaria, $total_horas_semana]);
    }
    public function diffHora($id){
        $sql = "SELECT * FROM horas where id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
        $data_hora_saida = new DateTime($resultado["data_hora_saida"]);
        $data_hora_entrada = new DateTime($resultado["data_hora_entrada"]);
        
        return $data_hora_entrada->diff($data_hora_saida);
    }
    public function updateHoras($total_horas_diaria, $total_horas_semana, $id){
        $sql = "UPDATE horas SET total_horas_diaria = ?, total_horas_semana = ? WHERE id =?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$total_horas_diaria, $total_horas_semana, $id]);
    }
    public function listarHoraPorId($id){
        $sql = "SELECT * FROM Horas WHERE id = $id";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getLatestId(){
        $stmt = $this->pdo->prepare("SELECT id from horas ORDER BY id DESC");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function listarHora(){
        $sql = "SELECT * FROM Horas";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>