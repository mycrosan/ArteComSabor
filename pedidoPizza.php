<?php require_once 'classes/header.php'; ?>
<body>
<!--
<div id = "menu">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="pedidoPizza.php">Página inicial</a></li>
                <li><a href="classes/destroiSessao.php">Destroi Sessãol</a></li>
                <li><a href="finalizaPedido.php">Finalizar Pedido</a></li>
            </ul>
 </div>
 -->

<?php

$cliente = new Cliente();
//Dados do Cliente para o Pedido
if (($_SERVER['REQUEST_METHOD'] == 'POST') and ($_POST['txtCliente'] != null)) {
    if (isset($_POST['txtCliente']) and (empty($_SESSION['dadosCliente'][0]))) {
        $cliente->IDcliente = $_REQUEST['txtIDCliente'];
        $cliente->telefone = $_REQUEST['txtTelefone'];
        $cliente->cliente = $_REQUEST['txtCliente'];
        $cliente->funcionario = $_REQUEST['txtFuncionario'];
        $cliente->endereco = $_REQUEST['txtEndereco'];
        $cliente->bairro = $_REQUEST['txtBairro'];
        Sessao::set('dadosCliente', array(
            'COD' => $cliente->IDcliente,
            'FONE' => $cliente->telefone,
            'NOME' => $cliente->cliente,
            'FUNC.' => $cliente->funcionario,
            'ENDEREÇO' => $cliente->endereco,
            'BAIRRO' => $cliente->bairro,
            'OBS' => $cliente->obs));
    }
}
//Dados dos itens parao pedidoi

$itens = new Cardapio();
if (($_SERVER['REQUEST_METHOD'] == 'POST') and ($_POST['txtDescricaoProduto'] != null)):
    if (isset($_POST['txtDescricaoProduto']) or (empty($_SESSION['itensPedido'][0]))):
        $itens->IDProduto = $_REQUEST['txtIDProduto'];
        $itens->descricao = $_REQUEST['txtDescricaoProduto'];
        $itens->quantidade = $_REQUEST['txtQuantidade'];
        $itens->preco = $_REQUEST['txtPreco'];
        $itens->IDProduto = $_REQUEST['txtIDProduto'];
        $itens->descricao = $_REQUEST['txtDescricaoProduto'];
        $itens->quantidade = $_REQUEST['txtQuantidade'];
        $itens->preco = $_REQUEST['txtPreco'];
        $itens->setSessao(session_id());
//$lista->setGeraID($_SESSION['id']);
//echo $_SESSION['id'] = $lista->getGeraID();
        Sessao::set('itensPedido', array(
            'COD' => $itens->IDProduto,
            'DESCRIÇÃO' => $itens->descricao,
            'QUANT.' => $itens->quantidade,
            'PREÇO' => $itens->preco));

    endif;
endif;
?>
<?php require_once 'classes/require/menu.php'; ?>
<div id="conteiner">
    <button onclick="getPedidoPizza();" class="btn btn-warning btn-lg" value="inserir" form="formPedido">Inserir item
    </button>
    <button type="button" onclick="window.location.href='classes/destroiSessao.php'" class="btn btn-warning btn-lg">
        Limpar
    </button>
    <button type="button" onclick="window.location.href='finalizaPedido.php'" class="btn btn-warning btn-lg">Salvar
    </button>

    <form id="formPedido" name="formPedido" method="post" action="pedidoPizza.php">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Inserir Cliente</h3>
            </div>
            <?php
            if (empty($_POST['txtCliente'])):
                ?>
                <div class="panel-body">
                    <div class
                    "row">
                    <input type="hidden" id="txtIDCliente" name="txtIDCliente"/>

                    <div class="col-md-2">
                        <input class="form-control" type="text" id="txtTelefone" name="txtTelefone"
                               placeholder="Telefone"/>
                    </div>

                    <div class="col-md-2">
                        <input class="form-control" type="text" id="txtCliente" name="txtCliente"
                               placeholder="Cliente"/>
                    </div>

                    <div class="col-md-3">
                        <input class="form-control" type="text" id="txtEndereco" name="txtEndereco"
                               placeholder="Endereço"/>
                    </div>

                    <div class="col-md-2">
                        <input class="form-control" type="text" id="txtBairro" name="txtBairro" placeholder="Bairro"/>
                    </div>
                    <div class="col-md-2">
                        <textarea class="form-control" type="text" id="txtObs" name="txtObs"
                                  placeholder="Observação"></textarea>
                    </div>


                    <div class="col-md-2">
                        <input class="form-control" type="hidden" id="txtFuncionario" name="txtFuncionario" value="1"
                               placeholder="Funcionario"/>
                    </div>

                </div>
            <?php else:; ?>
                <h4>Cliente:</h4>
                <div class="panel-body">
                    <div class
                    "row">
                    <input type="hidden" id="txtIDCliente" name="txtIDCliente"/>

                    <div class="col-md-2">
                        <input class="form-control" type="text" id="txtTelefone"
                               value=" <?php echo Sessao::get('dadosCliente', 0, 'FONE'); ?>" name="txtTelefone"
                               disabled>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" type="text" id="txtCliente"
                               value=" <?php echo Sessao::get('dadosCliente', 0, 'NOME'); ?>" name="txtCliente"
                               placeholder="Cliente" disabled>
                    </div>

                    <div class="col-md-3">
                        <input class="form-control" type="text" id="txtEndereco"
                               value=" <?php echo Sessao::get('dadosCliente', 0, 'ENDEREÇO'); ?>" name="txtEndereco"
                               placeholder="Endereço" disabled>
                    </div>

                    <div class="col-md-2">
                        <input class="form-control" type="text" id="txtBairro"
                               value=" <?php echo Sessao::get('dadosCliente', 0, 'BAIRRO'); ?>" name="txtBairro"
                               placeholder="Bairro" disabled>
                    </div>
                    <div class="col-md-2">
                        <?php
                        // Verifica se tem o obs se não tiver diz que não tem ainda.
                        $obs = ($_SESSION['dadosCliente'][0]['OBS']) ? Sessao::get('dadosCliente', 0, 'OBS') : 'Sem observação';
                        ?>
                        <textarea class="form-control" type="text" id="txtObs" name="txtObs"
                                  placeholder="Observação"><?php echo $obs; ?></textarea>
                    </div>

                    <div class="col-md-2">
                        <input class="form-control" type="hidden" id="txtFuncionario"
                               value=" <?php echo Sessao::get('dadosCliente', 0, 'FUNC.'); ?>" name="txtFuncionario"
                               value="1" placeholder="Funcionario"/>
                    </div>

                </div>
            <?php endif ?>
        </div>

</div>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Inserir Produto</h3>
    </div>

    <php if
    (isset(
    <div class="panel-body">
        <div class="row">
            <input type="hidden" id="txtIDProduto" name="txtIDProduto"/>

            <div class="col-md-3">
                <input class="form-control" type="text" id="txtDescricaoProduto" name="txtDescricaoProduto"
                       placeholder="Descrição do Produto"/>
            </div>
            <div class="col-md-1">
                <select name="txtQuantidade" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="col-md-3">
                <input class="form-control" type="text" id="txtPreco" name="txtPreco" placeholder="Preço"/>
            </div>
        </div>
    </div>
</div>
</form>
</div>
<?php
if (isset($_SESSION['dadosCliente']) and (isset($_SESSION['itensPedido']))) {
    $valores = new Sessao();
    echo "<h4>Produtos:</h4>";
    $valores->showValues('itensPedido', array('COD', 'DESCRIÇÃO', 'QUANT.', 'PREÇO'));
}


// Sessao::showValues('dadosCliente');

//Sessao::showArray();
//teste

?>
</body>
