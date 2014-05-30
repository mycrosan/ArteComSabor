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

    /**
     * @param mixed $data_cardapio
     */
    public function setDataCardapio($data_cardapio)
    {
        $this->data_cardapio = $data_cardapio;
    }

    /**
     * @return mixed
     */
    public function getDataCardapio()
    {
        return $this->data_cardapio;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $id_cardapio
     */
    public function setIdCardapio($id_cardapio)
    {
        $this->id_cardapio = $id_cardapio;
    }

    /**
     * @return mixed
     */
    public function getIdCardapio()
    {
        return $this->id_cardapio;
    }

    /**
     * @param mixed $pdv_ID_PDV
     */
    public function setPdvIDPDV($pdv_ID_PDV)
    {
        $this->pdv_ID_PDV = $pdv_ID_PDV;
    }

    /**
     * @return mixed
     */
    public function getPdvIDPDV()
    {
        return $this->pdv_ID_PDV;
    }

    /**
     * @param mixed $produto_ID_PRODUTO
     */
    public function setProdutoIDPRODUTO($produto_ID_PRODUTO)
    {
        $this->produto_ID_PRODUTO = $produto_ID_PRODUTO;
    }

    /**
     * @return mixed
     */
    public function getProdutoIDPRODUTO()
    {
        return $this->produto_ID_PRODUTO;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $secao
     */
    public function setSecao($secao)
    {
        $this->secao = $secao;
    }

    /**
     * @return mixed
     */
    public function getSecao()
    {
        return $this->secao;
    }

    /**
     * @param string $tabela
     */
    public function setTabela($tabela)
    {
        $this->tabela = $tabela;
    }

    /**
     * @return string
     */
    public function getTabela()
    {
        return $this->tabela;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
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
