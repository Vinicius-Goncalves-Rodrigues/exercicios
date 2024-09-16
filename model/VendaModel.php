<?php

class VendaModel {
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;

    }
    public function criarVenda($codigo , $nome, $quantidade){
        $sql= "INSERT INTO estoque(codigo, nome, quantidade) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$codigo , $nome, $quantidade]);
    }
    public function listarVenda(){
        $sql = "SELECT * FROM estoque";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
<?php

class EstoqueModel {
    private $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;

    }
    public function criarEstoque($nome_comprador, $datacompra, $nomeproduto,  $quantidade_estoque, $vendarealizada){
        $sql= "INSERT INTO vendas(nome_comprador, datacompra, nomeproduto,  quantidade_estoque, vendarealizada) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_comprador, $datacompra, $nomeproduto,  $quantidade_estoque, $vendarealizada]);
    }
    public function listarEstoque(){
        $sql = "SELECT * FROM vendas";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>  