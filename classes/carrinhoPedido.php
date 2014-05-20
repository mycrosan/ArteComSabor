
<?php
class carrinhoPedido extends itensCardapio{
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

    public function __get($key){
    return $this->$key;
}
    public function __set($key,$value){
        $this->$key = $value;
    }
}