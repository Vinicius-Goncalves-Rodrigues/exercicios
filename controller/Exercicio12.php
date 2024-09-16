<?php
require_once 'C:/aluno2/xampp/htdocs/FixacaoPHP/Exercicio12/Model/Exercicio12.php';

class Exercicio12Controller
{

    private $exercicio12Model;
    public function __construct($pdo)
    {
        $this->exercicio12Model = new Exercicio12Model($pdo);
    }
    public function criarExercicio12($placa_veiculo, $tipo_manutencao, $proxima_revisao, $quilometragem_atual)
    {

        $this->exercicio12Model->criarExercicio12($placa_veiculo, $tipo_manutencao, $proxima_revisao, $quilometragem_atual);
    }

    public function listarExercicio12()
    {
        return $this->exercicio12Model->listarexercicio12s();
    }
    public function exibirListaexercicio12s()
    {
        $exercicio12s = $this->exercicio12Model->listarexercicio12s();
        include 'C:/aluno2/xampp/htdocs/FixacaoPHP/Exercicio12/View/listar.php';
    }
}