<?php

/**
 * Created by PhpStorm.
 * User: Mycrosan
 * Date: 08/05/14
 * Time: 16:48
 */
//MARCA,IMP,CLASSE,SITUACAO,ALTERA,funcionarios_ID_FUNCIONARIO,clientes_ID_CLIENTE

/**
 * Class itensPedido
 */
class itensCardapio {
    //     Atributo dos items do pedido do cliente
    protected $tabela = 'cardapio';
    private $id_cardapio;
    private $tipo;
    private $qte;
    private $valor;
    private $data_cardapio;
    private $hora;
    private $classe;
    private $secao;
    private $pdv_ID_PDV;
    private $produto_ID_PRODUTO;

    public function __get($key){
        return $this->$key;
    }
    public function __set($key,$value){
        $this->$key = $value;
    }
    public function inserir(){
        $sql = "INSERT INTO $this->table (TIPO, QTE, VALOR, DATA, HORA, CLASSE, SECAO, pdv_ID_PDV, produtos_ID_PRODUTO) VALUES (:tipo, :qte, :valor, :data_cardapio, :hora, :classe, :secao, :pdv_ID_PDV, :idcliente)";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':tipo', $this->nome);
        $stmt->bindParam(':qte', $this->qte);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':data_cardapio', $this->data_cardapio);
        $stmt->bindParam(':hora', $this->hora);
        $stmt->bindParam(':classe', $this->classe);
        $stmt->bindParam(':secao', $this->secao);
        $stmt->bindParam(':pdv_ID_PDV', $this->pdv_ID_PDV);
        $stmt->bindParam(':produto_ID_PRODUTO', $this->produto_ID_PRODUTO);
        return $stmt->execute();
    }
    public function atualizar($id)
    {
        $sql = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}
