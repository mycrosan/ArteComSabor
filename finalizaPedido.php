<?php session_start(); ?>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php
//ARQUIVO 5
function __autoload($nclasse)
{
    require_once 'classes/' . $nclasse . '.php';
}
?>
<?php

/**
 * Class finalizaPedido
 */
//ARQUIVO 5
$itens = $_SESSION['itensPedido'];
$dadosCliente = $_SESSION['dadosCliente'];
// var_dump($itens);

foreach($dadosCliente as $valores){
    echo $valores."-";
}
foreach($itens as $valor){
    $cardapio = new itensCardapio();
    echo $valor[0];
    echo $valor[1];
    echo $valor[2];
    echo $valor[3];
    echo "<br>";
}
?>
<?php
if($_GET['acao']==1){
    echo "Deu Certo";
}
?>
<a class="btn btn btn-success" href="finalizaPedido.php?acao=1">Imprimir</a>
<a class="btn btn-primary" href="finalizaPedido.php?acao=1">Enviar para cozinha</a>
<a class="btn btn-primary" href="finalizaPedido.php?acao=1">Salvar</a>
<input class="btn btn-warning" type="button" name="button1" value="Enviar" onClick="document.location.href=('finalizaPedido.php?acao=1')"/>
