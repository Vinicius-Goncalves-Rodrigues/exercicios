<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/model/VendaModel.php';
class VendaController {
    private $VendaModel;
    public function __construct($pdo) {
        $this->VendaModel = new VendaModel($pdo);
    }
    public function  criarVenda($codigo , $nome, $quantidade ){
        $this->VendaModel->criarVenda($codigo , $nome, $quantidade);
    }
    public function listarVenda(){
        return $this->VendaModel->listarVenda();
    }
   
    

}
?>
<?php
require_once 'C:/aluno2/xampp/htdocs/trabalho-fixo/model/VendaModel.php';
class EstoqueController {
    private $EstoqueModel;
    private $VendaModel;
    public function __construct($pdo) {
        $this->EstoqueModel = new EstoqueModel($pdo);
        $this->VendaModel = new VendaModel($pdo);
    }
    public function  criarEstoque( $nome_comprador, $datacompra, $nomeproduto,  $quantidade_estoque, $vendarealizada ){
        $this->EstoqueModel->criarEstoque($nome_comprador, $datacompra, $nomeproduto,  $quantidade_estoque , $vendarealizada);
    }
    public function listarEstoque(){
        return $this->EstoqueModel->listarEstoque();
    }
    public function exibirListaEstoque(){
        $estoques = $this->EstoqueModel->listarEstoque();
        $vendas = $this->VendaModel->listarVenda();
        include 'C:\aluno2\xampp\htdocs\trabalho-fixo\view\venda\listar.php';
    }

}