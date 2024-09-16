<?php

class Exercicio15Model
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;

    }

    public function cadastrarAfazer($nome_usuario, $data, $hora, $local, $descricao_evento)
    {
        $sql = "INSERT INTO agenda_eventos (nome_usuario, data, hora, local, descricao_evento) 
        VALUES (:nome_usuario, :data, :hora, :local, :descricao_evento)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome_usuario', $nome_usuario);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':hora', $hora);
        $stmt->bindParam(':local', $local);
        $stmt->bindParam(':descricao_evento', $descricao_evento);
        return $stmt->execute();
    }
    public function listarAfazeres()
    {
        $sql = "SELECT * FROM agenda_eventos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}
?>