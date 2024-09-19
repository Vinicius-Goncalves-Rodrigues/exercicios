<?php
require_once 'C:/aluno2/xampp/htdocs/exercicios/Model/Exercicio15Model.php';
require_once 'C:/aluno2/xampp/htdocs/exercicios/config.php';

class Exercicio15Controller
{

    private $exercicio15Model;
    public function __construct($pdo)
    {
        $this->exercicio15Model = new Exercicio15Model($pdo);
    }
    public function cadastrarAfazer($nome_usuario, $data, $hora, $local, $descricao_evento)
    {

        return $this->exercicio15Model->cadastrarAfazer($nome_usuario, $data, $hora, $local, descricao_evento: $descricao_evento);
    }

    public function listarAfazeres()
    {
        return $this->exercicio15Model->listarAfazeres();
    }
}