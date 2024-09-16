<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/model/RestaurantegayModel.php';

class RestaurantegayController {
    private $RestaurantegayModel;

    public function __construct($pdo) {
        $this->RestaurantegayModel = new RestaurantegayModel($pdo);
    }

    public function reservar($cliente, $mesa) {
        $this->RestaurantegayModel->reservar($cliente, $mesa);
    }

    public function listarrestaurante() {
        return $this->RestaurantegayModel->listarrestaurante();
    }

    public function exibirlistarrestaurante() {
        $restaurantes = $this->RestaurantegayModel->listarrestaurante();
        include 'C:\aluno2\xampp\htdocs\exercicios\view\restaurantegay\listar.php';
    }

    public function getLatestid() {
        return $this->RestaurantegayModel->getLatestid();
    }

    public function pesquisardata($data_gay) {
        return $this->RestaurantegayModel->pesquisardata($data_gay);
    }

    public function checarrestaurante($cliente, $data_gay) {
        $pesquisa = $this->RestaurantegayModel->pesquisardata($data_gay);
        if (empty($pesquisa)) {
            $this->reservar($cliente, 'SIM');  // Corrected method call
            return 'SIM';
        } else {
            $this->reservar($cliente, 'NAO');  // Corrected method call
            return 'NAO';
        }
    }
}
