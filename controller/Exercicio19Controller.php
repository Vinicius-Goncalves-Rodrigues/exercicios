<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/Exercicio19Model.php';

class Exercicio19Controller
{

    private $exercicio19Model;
    public function __construct($pdo)
    {
        $this->exercicio19Model = new Exercicio19Model($pdo);
    }
    public function calcularJuros($deposito_mensal, $taxa_juros, $tempo, $vA)
    {

       return $this->exercicio19Model->calcularJuros($deposito_mensal, $taxa_juros, $tempo, $vA);
    }

    public function calcularvA($deposito_mensal, $taxa_juros)
    {
        return $this->exercicio19Model->calcularvA($deposito_mensal, $taxa_juros);
    }

    public function listarPoupancas()
    {
        return $this->exercicio19Model->listarPoupancas();
    }
public function exibirListaPoupancas(){
    $poupancas = $this->exercicio19Model->listarPoupancas();
    include 'C:/aluno2/xampp/htdocs/exercicios/View/listar.php';
}
}