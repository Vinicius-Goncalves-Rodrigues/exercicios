<?php

class TarefacasaModel {
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;

    }
    public function criarTarefa($tarefa, $responsavel, $data_inicio, $data_final, $statuz){
        $sql= "INSERT INTO estoque(tarefa, responsavel, data_inicio, data_final, status) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$tarefa, $responsavel, $data_inicio, $data_final, $statuz]);
    }
    public function listarTarefa(){
        $sql = "SELECT * FROM tarefacasa";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function checar($tarefa, $responsavel, $data_inicio, $data_final, $statuz ){
        if ($statuz== $statuz){
            $statuz = "SIM";
        }
        else{
            $statuz = "NÃO";
        }
        $this->criarTarefa($tarefa, $responsavel, $data_inicio, $data_final, $statuz);
        return $statuz;
    }
}
?>