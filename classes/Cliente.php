<?php

class Cliente extends Crud
{
    //Atributos do pedido do cliente
    protected $tabela = 'clientes';
    protected $campoid = 'ID_CLIENTE';
    private $IDcliente;
    private $telefone;
    private $cliente;
    private $funcionario;
    private $endereco;
    private $bairro;
    private $obs;

    public function inserir()
    {
        // TODO: Implement inserir() method.
    }

    public function atualizar($id)
    {
        // TODO: Implement atualizar() method.
    }


    public function __get($key)
    {
        return $this->$key;
    }

    public function __set($key, $value)
    {
        $this->$key = $value;
    }
}