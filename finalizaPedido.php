<?php require_once 'classes/header.php'; ?>
<?php require_once 'classes/require/menu.php'; ?>
<?php
$valores = new Sessao();
echo "<h4>Cliente:</h4>";
$valores->showValues('dadosCliente', array('COD', 'FONE', 'NOME', 'FUNC.', 'ENDEREÇO', 'BAIRRO'));
echo "<h4>Produtos:</h4>";
$valores->showValues('itensPedido', array('COD', 'DESCRIÇÃO', 'QUANT.', 'PREÇO'));


//echo $_SESSION['dadosCliente'][0]['COD'];

//if($_POST){
$inserirPdv = new Pdv();
//$inserirPdv->setTipo($_SESSION['dadosCliente'][0]['COD']);
//$inserirPdv->setQte($_SESSION['dadosCliente'][0]['FONE']);
//$inserirPdv->setValor($_SESSION['dadosCliente'][0]['NOME']);
//$inserirPdv->setMarca($_SESSION['dadosCliente'][0]['ENDEREÇO']);
//$inserirPdv->setImp($_SESSION['dadosCliente'][0]['BAIRRO']);
//$inserirPdv->setClasse($_SESSION['dadosCliente'][0]['BAIRRO']);
$inserirPdv->setStatus('A');
//$inserirPdv->setAltera($_SESSION['dadosCliente'][0]['BAIRRO']);
$inserirPdv->setIdfuncionario($_SESSION['dadosCliente'][0]['FUNC.']);
$inserirPdv->setIdcliente($_SESSION['dadosCliente'][0]['COD']);
$inserirPdv->setSessao(session_id());
$inserirPdv->setDataPdv(date("Y/m/d"));
$inserirPdv->setHora(date("H:i:s"));
$inserirPdv->inserir();
if ($inserirPdv) {
    //Esse método pega o id do último pedido inserido. "Tem que revisar"
    $idParaCardapio = $inserirPdv->getIdPdv();
    echo "Pdv " . $idParaCardapio . " Inserido com sucesso" . "<br>";

}
// Instancia o objeto cardápio para inserir na tabela cardapio - Precisa da FK do PDV

$inserirCardapio = new Cardapio();

$qtdItens = count($_SESSION['itensPedido']);

for ($i = 0; $i < $qtdItens; $i++) {
    $inserirCardapio->setProdutoIDPRODUTO($_SESSION['itensPedido'][$i]['COD']);
    $inserirCardapio->setQte($_SESSION['itensPedido'][$i]['QUANT.']);
    $inserirCardapio->setSessao(session_id());
    $inserirCardapio->setPdvIDPDV($idParaCardapio);
    $inserirCardapio->inserir();
}


if ($inserirCardapio) {
    echo "<br>";
    echo "Itens do Pedido " . $idParaCardapio . " cadastrado certinho";
    echo "<br>";
} else {
    echo "Tem algum problema";
}







?>
<button type="submit" value="inserir" form="formPedido">IMPRIMIR PEDIDO</button>
<button type="submit" value="inserir" form="formPedido">ENVIAR PARA COZINHA</button>
<button type="submit" value="inserir" form="formPedido">SALVAR PEDIDO</button>


