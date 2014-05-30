<?php Sessao::iniciaSessao()?>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
date_default_timezone_set('America/Sao_Paulo');
//ARQUIVO 5
function __autoload($nclasse)
{
    require_once 'classes/' . $nclasse . '.php';

}
?>
    <!DOCTYPE HTML>
<html land="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>PHP OO</title>
        <meta name="description" content="PHP OO"/>
        <meta name="robots" content="index, follow"/>
        <meta name="author" content="Andrew Esteves"/>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/Montanha.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/efeito.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.4.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>


    </head>

<body>
    <h1 class="muted">Pedidos para entrega ACS</h1>
    <nav class="navbar ">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a href="index.php">Página inicial</a></li>
                <li class="active"><a href="classes/destroiSessao.php">Destroi Sessãol</a></li>
                <li class="active"><a href="finalizaPedido.php">Finalizar Pedido</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <form id="formPedido" name="formPedido" method="post">
        <h3>Dados do Cliente</h3>
        <input type="hidden" id="txtIDCliente" name="txtIDCliente" />
        <input type="text" id="txtTelefone" name="txtTelefone" placeholder="Telefone"/>
        <input type="text" id="txtCliente" name="txtCliente"  placeholder="Cliente"/>
        <input type="text" id="txtEndereco" name="txtEndereco" placeholder="Endereço"/>
        <input type="text" id="txtBairro" name="txtBairro" placeholder="Bairro"/>
        <input type="text" id="txtFuncionario" name="txtFuncionario" value ="1" placeholder="Funcionario"/>
        <h2>Produtos:</h2>
        <input type="hidden" id="txtIDProduto" name="txtIDProduto" />
        <input type="text" id="txtDescricaoProduto" name="txtDescricaoProduto" placeholder="Descrição do Produto"/>
        <select name="txtQuantidade">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <input type="text" id="txtPreco" name="txtPreco" placeholder="Preço"/>
    </form>
    <button type="submit" class="btn btn-primary btn-lg" value="inserir" form="formPedido">Inserir</button>
<?php

$cliente = new Cliente();
//Dados do Cliente para o Pedido
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['txtCliente'])and(empty($_SESSION['dadosCliente'][0]))){
        $cliente->IDcliente = $_REQUEST['txtIDCliente'];
        $cliente->telefone = $_REQUEST['txtTelefone'];
        $cliente->cliente = $_REQUEST['txtCliente'];
        $cliente->funcionario = $_REQUEST['txtFuncionario'];
        $cliente->endereco = $_REQUEST['txtEndereco'];
        $cliente->bairro = $_REQUEST['txtBairro'];
        Sessao::set('dadosCliente',array(
            'COD' => $cliente->IDcliente,
            'FONE' => $cliente->telefone,
            'NOME'  => $cliente->cliente,
            'FUNC.' =>$cliente->funcionario,
            'ENDEREÇO' => $cliente->endereco,
            'BAIRRO' =>$cliente->bairro));
    }
}
//Dados dos itens parao pedidoi

$itens = new Cardapio();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['txtDescricaoProduto'])){
        $itens->IDProduto = $_REQUEST['txtIDProduto'];
        $itens->descricao = $_REQUEST['txtDescricaoProduto'];
        $itens->quantidade = $_REQUEST['txtQuantidade'];
        $itens->preco = $_REQUEST['txtPreco'];
        $itens->IDProduto = $_REQUEST['txtIDProduto'];
        $itens->descricao = $_REQUEST['txtDescricaoProduto'];
        $itens->quantidade = $_REQUEST['txtQuantidade'];
        $itens->preco = $_REQUEST['txtPreco'];
        $itens->sessao = session_id();
//$lista->setGeraID($_SESSION['id']);
//echo $_SESSION['id'] = $lista->getGeraID();
        Sessao::set('itensPedido',array(
            'COD'=>$itens->IDProduto,
            'DESCRIÇÃO'=>$itens->descricao,
            'QUANT.'=>$itens->quantidade,
            'PREÇO'=>$itens->preco));
    }
    $valores = new Sessao();
    echo"<h4>Cliente:</h4>";
    $valores->showValues('dadosCliente',array('COD','FONE','NOME','FUNC.','ENDEREÇO','BAIRRO'));
    echo "<h4>Produtos:</h4>";
    $valores->showValues('itensPedido',array('COD','DESCRIÇÃO','QUANT.','PREÇO'));




    // Sessao::showValues('dadosCliente');

    //Sessao::showArray();
    //teste
}
