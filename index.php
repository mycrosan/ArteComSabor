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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <!--  <script/> src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="css/Montanha.css"/>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">


    <!-- Optional theme -->


    <!-- Latest compiled and minified JavaScript -->

    <link rel="stylesheet"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/efeito.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            // Chamo o Auto complete do JQuery ui setando o id do input, array com os dados e o mínimo de caracteres para disparar o AutoComplete
            $('#txtTelefone').autocomplete({
                source: 'classes/retornaCliente.php',
                minLength: 1,
                select: function(evento,conteudo){
                    //console.log(conteudo);
                    $('#txtCliente').val(conteudo.item.nome);
                    $('#txtEndereco').val(conteudo.item.endereco);
                    $('#txtBairro').val(conteudo.item.bairro);
                }
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Chamo o Auto complete do JQuery ui setando o id do input, array com os dados e o mínimo de caracteres para disparar o AutoComplete
            $('#txtDescricaoProduto').autocomplete({
                source: 'classes/retornaProduto.php',
                minLength: 2,
                select: function(evento,conteudo){
                    var conteudo = $('#txtPreco').val(conteudo.item.preco);
                   

                }
            });
        });

    </script>

    <script type="text/javascript">
        /*
         $(document).ready(function(){
         $('#resultadoconsulta').hide();
         $('input').blur(function(){ //Quando clicado no elemento input
         alert('ola');

         $.ajax({
         url: 'arquivo.html',
         success: function(data) {
         // $('#conteudo').html(data);
         // alert(data);
         },
         beforeSend: function(){
         $('.loader').css({display:"block"});
         },
         complete: function(){
         $('.loader').css({display:"none"});
         }
         });
         });
         });
         */
    </script>

</head>

<body>
<div id="container2">
    <div class="container">
        <div id="conteudo">
            <?php
            // Objeto para inserir
            $usuario = new Usuarios();
            if (isset($_POST['cadastrar'])):
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $usuario->configurarNome($nome);
                $usuario->configuraEmail($email);

                # Insert
                if ($usuario->inserir()) {
                    echo "Inserido com sucesso!";
                } else {
                    echo "Deu pau";
                }

            endif;

            ?>
            <header class="masthead">
                <h1 class="muted">Pedidos para entrega ACS</h1>
                <nav class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li class="active"><a href="index.php">Página inicial</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <?php
            if (isset($_POST['atualizar'])):
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $usuario->configurarNome($nome);
                $usuario->configuraEmail($email);
                if ($usuario->atualizar($id)) {
                    echo "Atualizado certinho";
                } else {
                    echo "Opa algo não saiu como deveria";
                }

            endif;
            ?>
            <?php
            if (isset ($_GET['acao']) && $_GET['acao'] == 'deletar'):
                $id = (int)$_GET['id'];
                if ($usuario->apagar($id)) {
                    echo "Apagou";
                }
            endif;
            ?>
            <?php
            if (isset($_GET['acao']) && $_GET['acao'] == 'editar') {
                $id = (int)$_GET['id'];
                $resultado = $usuario->encontrar($id);
                ?>
                <form method="post" action="">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-user"></i></span>
                        <input type="text" name="nome" value="<?php echo $resultado->nome ?>" placeholder="Nome:"/>
                    </div>
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope"></i></span>
                        <input type="text" name="email" value="<?php echo $resultado->email ?>" placeholder="E-mail:"/>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
                    <br/>
                    <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar">
                </form>
            <?php } else { ?>
                <form>
                <h3>Dados do Cliente</h3>
                <input type="hidden" id="txtID" name="txtID">
                <input type="text" id="txtTelefone" name="txtTelefone" placeholder="Telefone"/>
                <input type="text" id="txtCliente" name="txtCliente" placeholder="Cliente"/>
                <input type="text" id="txtEndereco" name="txtEndereco" placeholder="Endereço"/>
                <input type="text" id="txtBairro" name="txtBairro" placeholder="Bairro"/>
                <input type="text" id="txtFuncionario" name="txtFuncionario" value="Meire" placeholder="Funcionario"/>
                <h2>Produtos:</h2>

                    <input type="text" id="txtDescricaoProduto" name="txtDescricaoProduto" placeholder="Descrição do Produto"/>
                    <input type="text" id="txtQuantidade" name="txtQuantidade" placeholder="Quantidade"/>
                    <input type="text" id="txtPreco" name="txtPreco" placeholder="Preço"/>
                    <input type="submit" id="submit" name="inserir" value="inserir">
                </form>





            <?php }; ?>
<?php

            $lista = new carrinhoPedido();
//Dados do Cliente para o Pedido
            //$lista->setID($_REQUEST['txtIDcliente']);
            $lista->setTelefone($_REQUEST['txtTelefone']);
            $lista->setCliente($_REQUEST['txtCliente']);
            $lista->setFuncionario($_REQUEST['txtFuncionario']);
            $lista->setEndereco($_REQUEST['txtEndereco']);
            $lista->setBairro($_REQUEST['txtBairro']);
            echo $lista->getTelefone();
            echo $lista->getCliente();
            echo $lista->getFuncionario();
            echo $lista->getEndereco();
            echo $lista->getBairro();

//Dados dos itens parao pedido
            $listadeitens = new itensPedido();
            //$listadeitens->setIDProduto($_REQUEST['txtIDProduto']);
            $listadeitens->setDescricao($_REQUEST['txtDescricaoProduto']);
            $listadeitens->setQuantidade($_REQUEST['txtQuantidade']);
            $listadeitens->setPreco($_REQUEST['txtPreco']);

            echo $listadeitens->getIDProduto();
            echo $listadeitens->getDescricao();
            echo $listadeitens->getQuantidade();
            echo $listadeitens->getPreco();





?>

            <div id="divPreco"></div>

        </div>
    </div>
    <div id="mountains"></div>
    <div id="grass"></div>
    <canvas id="pixie"></canvas>

</body>

</html>