<?php Sessao::iniciaSessao()?>
<!DOCTYPE HTML>
<html land="pt-BR">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
date_default_timezone_set('America/Sao_Paulo');
//ARQUIVO 5
function __autoload($nclasse)
{
    require_once 'classes/' . $nclasse . '.php';

}
?>
<head>
    <title>Pedidos ACS</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/layout.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <!-- FIM CSS -->
    <!-- JS -->
    <script src="js/script.responsive.js"></script>
    <script type="text/javascript" src="js/efeito.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- FIM JS -->

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="js/funcoes.js"></script>
    <script>
        $(document).ready(function () {
            $('#list').DataTable();
        });
    </script>
</head>