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
class itensPedido {
    //     Atributo dos items do pedido do cliente
    protected $tabela = 'clientes';
    private $tipo;
    private $IDProduto;
    private $descricao;
    private $quantidade;
    private $preco;
    private $marca;
    private $imp;
    private $classe;
    private $situacao;
    private $altera;
    private $idPedido;
    private $geraID;

    public function __get($key){
        return $this->$key;
    }
    public function __set($key,$value){
        $this->$key = $value;
    }
   }
