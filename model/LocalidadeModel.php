<?php

class LocalidadeModel{
private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function criarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais){
        $sql = "INSERT INTO localidade(rua,bairro,numero,cep,cidade,estado,pais) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$rua,$bairro,$numero,$cep,$cidade,$estado,$pais]);
    }

    public function listarLocalidade(){
        $sql = "SELECT * FROM localidade";
        $stmt =$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarLocalidade($rua,$bairro,$numero,$cep,$cidade,$estado,$pais,$id_localidade){
        $sql = "UPDATE localidade SET rua = ?, bairro = ?, numero = ?, cep = ?, cidade = ?, estado = ?, pais = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$rua,$bairro,$numero,$cep,$cidade,$estado,$pais,$id_localidade]);
    }

    public function deletarLocalidade($id_localidade){
        $sql = "DELETE FROM localidade WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_localidade]);
    }
}