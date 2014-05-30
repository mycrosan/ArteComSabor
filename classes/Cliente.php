
<?php
class Cliente{
//Atributos do pedido do cliente
    private $IDcliente;
    private $telefone;
    private $cliente;
    private $funcionario;
    private $endereco;
    private $bairro;

    public function __get($key){
    return $this->$key;
}
    public function __set($key,$value){
        $this->$key = $value;
    }
}