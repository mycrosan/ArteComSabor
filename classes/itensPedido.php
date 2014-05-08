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