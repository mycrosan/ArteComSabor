<?php

/**
 * Created by PhpStorm.
 * User: Mycrosan
 * Date: 08/05/14
 * Time: 16:48
 */


class itensPedido {
    //     Atributo dos items do pedido do cliente

    private $IDProduto;
    private $descricao;
    private $quantidade;
    private $preco;
    private $idPedido;
    private $geraID;

    /**
     * @param mixed $geraID
     */
    public function setGeraID($geraID)
    {
        if($geraID==null){
            $geraID=1;
        }else{
            $geraID +=1;
        }
        $this->geraID = $geraID;
    }

    /**
     * @return mixed
     */
    public function getGeraID()
    {
        return $this->geraID;
    }

    /**
     * @param mixed $idPedido
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;
    }

    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * @param mixed $IDProduto
     */
    public function setIDProduto($IDProduto)
    {
        $this->IDProduto = $IDProduto;
    }

    /**
     * @return mixed
     */
    public function getIDProduto()
    {
        return $this->IDProduto;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }


} 