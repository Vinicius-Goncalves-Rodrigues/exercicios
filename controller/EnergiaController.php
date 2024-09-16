<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/model/EnergiaModel.php';
class EnergiaController {
    private $EnergiaModel;
    public function __construct($pdo) {
        $this->EnergiaModel = new EnergiaModel($pdo);
    }
    public function  criarEnergia($nome_residente, $mes, $consumo_kwh, $tarifa, $fatura){
        $this->EnergiaModel->criarEnergia($nome_residente, $mes, $consumo_kwh, $tarifa, $fatura);
    }
    public function listarEnergia(){
        return $this->EnergiaModel->listarEnergia();
    }
   
    public  function calcularFatura($consumo_kwh) {
        $tarifa = 4.00; // Tarifa fixa por kWh
        $custoTotal = $consumo_kwh * $tarifa;
        
        return $custoTotal;

    }
    
    public function exibirlistarEnergia(){
        $energias = $this->EnergiaModel->listarEnergia();
        include 'C:\aluno2\xampp\htdocs\trabalho-fixo\view\energia\listar.php';
    }


}