<?php session_start() ?>
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
class finalizaPedido extends Crud{
//ARQUIVO 5
$itens = $_SESSION['itensPedido'];
$dadosCliente = $_SESSION['dadosCliente'];
// var_dump($itens);

foreach($dadosCliente as $valores){
    echo $valores."-";
}
foreach($itens as $valor){
    id $valor[0];
    echo $valor[1];
    echo $valor[2];
    echo $valor[3];
    echo "<br>";
}
?>
<button type="submit" value="inserir" form="formPedido">IMPRIMIR PEDIDO</button>
<button type="submit" value="inserir" form="formPedido">ENVIAR PARA COZINHA</button>
<button type="submit" value="inserir" form="formPedido">SALVAR PEDIDO</button>

<?php
if($_POST){
    foreach($dadosCliente as $valores){
        $cliente =  $valores."-";
    }
    foreach($itens as $valor){
        id $valor[0];
    echo $valor[1];
    echo $valor[2];
    echo $valor[3];
    echo "<br>";

}

}
?>