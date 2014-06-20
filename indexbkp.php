<?php require_once 'classes/header.php';?>
<DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <?php
       $pedidos = new Pdv();
    ?>

    <a href="#" class="adicionar">Adicionar</a>
    <div id="dados">
        <?php
        foreach ($pedidos->encontrarTudo() as $chave =>$valor):
         echo $valor->clientes_ID_CLIENTE;
         echo $valor->STATUS;
         echo $valor->DATAPDV;
         echo $valor->HORA;
            echo"<br />";
        endforeach;

        ?>
    </div>
    </body>

    </html>






