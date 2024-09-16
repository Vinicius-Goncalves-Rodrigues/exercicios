<?php

class RestaurantegayModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function reservar($cliente, $mesa) {
        $sql = "INSERT INTO restaurantegay (cliente, mesa) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cliente, $mesa]);
    }

    public function listarrestaurante() {
        $sql = "SELECT * FROM restaurantegay";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLatestid() {
        $sql = "SELECT id FROM restaurantegay ORDER BY id DESC LIMIT 1";
        $stmt = $this->pdo->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['id'] : null;
    }

    public function pesquisardata($data_gay) {
        $sql = "SELECT id FROM restaurantegay WHERE data_gay LIKE ? AND mesa = 'SIM'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$data_gay . '%']);  // Ensure the '%' is used if you want a LIKE match
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}