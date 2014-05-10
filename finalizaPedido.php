<?php session_start() ?>
<?php
//ARQUIVO 5
$itens = $_SESSION['itensPedido'];
$dadosCliente = $_SESSION['dadosCliente'];
// var_dump($itens);

foreach($dadosCliente as $valores){
    echo $valores."-";
}
foreach($itens as $valor){
    echo $valor[0];
    echo $valor[1];
    echo $valor[2];
    echo $valor[3];
    echo "<br>";
}
?>
<button type="submit" value="inserir" form="formPedido">IMPRIMIR PEDIDO</button>