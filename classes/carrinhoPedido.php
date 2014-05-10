
<?php
class carrinhoPedido extends itensPedido{
//Atributos do pedido do cliente
    private $IDcliente;
    private $telefone;
    private $cliente;
    private $funcionario;
    private $endereco;
    private $bairro;

//Atributos da lista de item do pedido do cliente

    private $dataHora;
    private $previsaoDeEntrega;
    public  $cardapioItens;

    /**
     * @param mixed $IDcliente
     */
    public function setIDcliente($IDcliente)
    {
        $this->IDcliente = $IDcliente;
    }

    /**
     * @return mixed
     */
    public function getIDcliente()
    {
        return $this->IDcliente;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $cardapioItens
     */
    public function setCardapioItens($cardapioItens)
    {
        $this->cardapioItens = $cardapioItens;
    }

    /**
     * @return mixed
     */
    public function getCardapioItens()
    {
        return $this->cardapioItens;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $dataHora
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;
    }

    /**
     * @return mixed
     */
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $previsaoDeEntrega
     */
    public function setPrevisaoDeEntrega($previsaoDeEntrega)
    {
        $this->previsaoDeEntrega = $previsaoDeEntrega;
    }

    /**
     * @return mixed
     */
    public function getPrevisaoDeEntrega()
    {
        return $this->previsaoDeEntrega;
    }

    /**
     * @param mixed $funcionario
     */
    public function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;
    }

    /**
     * @return mixed
     */
    public function getFuncionario()
    {
        return $this->funcionario;
    }

} 