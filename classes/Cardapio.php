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
class Cardapio extends Crud {
    //     Atributo dos items do pedido do cliente
    protected $tabelacard = 'cardapio';
    private $id_cardapio;
    private $tipo;
    private $qte;
    private $valor;
    private $classe;
    private $sessao;
    private $pdv_ID_PDV;
    private $produto_ID_PRODUTO;

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
     * @param mixed $sessao
     */
    public function setSessao($sessao)
    {
        $this->sessao = $sessao;
    }

    /**
     * @return mixed
     */
    public function getSessao()
    {
        return $this->sessao;
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
     * @param mixed $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $data_cardapio
     */
    public function pegaIdPdv(){
       // $idPdv = $this->encontrarTudo();
        //print_r($idPdv);
        //return $idPdv;
    }


    public function inserir(){
        $sql = "INSERT INTO $this->tabelacard (TIPO, QTE, VALOR, CLASSE, SESSAO, pdv_ID_PDV, produtos_ID_PRODUTO) VALUES (:tipo, :qte, :valor, :classe, :sessao, :pdv_ID_PDV, :produto_ID_PRODUTO)";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':qte', $this->qte);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':classe', $this->classe);
        $stmt->bindParam(':sessao', $this->sessao);
        $stmt->bindParam(':pdv_ID_PDV', $this->pdv_ID_PDV);
        $stmt->bindParam(':produto_ID_PRODUTO', $this->produto_ID_PRODUTO);
        return $stmt->execute();
    }
    public function atualizar($id)
    {
        $sql = "UPDATE $this->tabelacard SET nome = :nome, email = :email WHERE id = :id";
        $stmt = DB::preparaotrem($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}

