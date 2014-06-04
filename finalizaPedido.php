<?php Sessao::iniciaSessao()?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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
</head>
<?php
date_default_timezone_set('America/Sao_Paulo');
//ARQUIVO 5
function __autoload($nclasse)
{
    require_once 'classes/' . $nclasse . '.php';

}
?>
<?php
$valores = new Sessao();
echo"<h4>Cliente:</h4>";
$valores->showValues('dadosCliente',array('COD','FONE','NOME','FUNC.','ENDEREÇO','BAIRRO'));
echo "<h4>Produtos:</h4>";
$valores->showValues('itensPedido',array('COD','DESCRIÇÃO','QUANT.','PREÇO'));


//echo $_SESSION['dadosCliente'][0]['COD'];

//if($_POST){
$inserirPdv = new Pdv();
//$inserirPdv->setTipo($_SESSION['dadosCliente'][0]['COD']);
//$inserirPdv->setQte($_SESSION['dadosCliente'][0]['FONE']);
//$inserirPdv->setValor($_SESSION['dadosCliente'][0]['NOME']);
//$inserirPdv->setMarca($_SESSION['dadosCliente'][0]['ENDEREÇO']);
//$inserirPdv->setImp($_SESSION['dadosCliente'][0]['BAIRRO']);
//$inserirPdv->setClasse($_SESSION['dadosCliente'][0]['BAIRRO']);
$inserirPdv->setStatus($_SESSION['dadosCliente'][0]['BAIRRO']);
//$inserirPdv->setAltera($_SESSION['dadosCliente'][0]['BAIRRO']);
$inserirPdv->setIdfuncionario($_SESSION['dadosCliente'][0]['FUNC.']);
$inserirPdv->setIdcliente($_SESSION['dadosCliente'][0]['COD']);
$inserirPdv->setSessao(session_id());
$inserirPdv->setDataPdv(date("Y/m/d"));
$inserirPdv->setHora(date("H:i:s"));
$inserirPdv->inserir();

$inserirCardapio = new Cardapio();
$idPedido = session_id();
foreach($_SESSION['itensPedido'] as $itens){
    $inserirCardapio->setProdutoIDPRODUTO($itens['COD']);
    $inserirCardapio->setQte($itens['QUANT']);
    //$inserirCardapio->setPdvIDPDV($idPedido);
    $inserirCardapio->inserir();
}
if($inserir){
    echo "Dados inseridos";
}else{
    echo "Tem algum problema";
}
//}






?>
<button type="submit" value="inserir" form="formPedido">IMPRIMIR PEDIDO</button>
<button type="submit" value="inserir" form="formPedido">ENVIAR PARA COZINHA</button>
<button type="submit" value="inserir" form="formPedido">SALVAR PEDIDO</button>


