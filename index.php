<?php Sessao::iniciaSessao()?>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
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
        <input type="text" id="txtFuncionario" name="txtFuncionario" placeholder="Funcionario"/>
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

$lista = new carrinhoPedido();
//Dados do Cliente para o Pedido
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['txtCliente'])and(empty($_SESSION['dadosCliente'][0]))){
        $lista->IDcliente = $_REQUEST['txtIDCliente'];
        $lista->telefone = $_REQUEST['txtTelefone'];
        $lista->cliente = $_REQUEST['txtCliente'];
        $lista->funcionario = $_REQUEST['txtFuncionario'];
        $lista->endereco = $_REQUEST['txtEndereco'];
        $lista->bairro = $_REQUEST['txtBairro'];
        Sessao::set('dadosCliente',array(
            'COD' => $lista->IDcliente,
            'FONE' => $lista->telefone,
            'NOME'  => $lista->cliente,
            'FUNC.' =>$lista->funcionario,
            'ENDEREÇO' => $lista->endereco,
            'BAIRRO' =>$lista->bairro));
    }
}
//Dados dos itens parao pedidoi
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['txtDescricaoProduto'])){
        @$lista->IDProduto = $_REQUEST['txtIDProduto'];
        @$lista->descricao = $_REQUEST['txtDescricaoProduto'];
        @$lista->quantidade = $_REQUEST['txtQuantidade'];
        @$lista->preco = $_REQUEST['txtPreco'];
        $lista->IDProduto = $_REQUEST['txtIDProduto'];
        $lista->descricao = $_REQUEST['txtDescricaoProduto'];
        $lista->quantidade = $_REQUEST['txtQuantidade'];
        $lista->preco = $_REQUEST['txtPreco'];
//$lista->setGeraID($_SESSION['id']);
//echo $_SESSION['id'] = $lista->getGeraID();
        Sessao::set('itensPedido',array(
            'COD'=>$lista->IDProduto,
            'DESCRIÇÃO'=>$lista->descricao,
            'QUANT.'=>$lista->quantidade,
            'PREÇO'=>$lista->preco));
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
