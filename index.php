<?php require_once 'classes/require/menu.php'; ?>

<?php
$pedidos = new Pdv();
?>

<button type="button" onclick="window.location.href='pedidoPizza.php'" class="btn btn-warning btn-lg">Novo Pedido
</button>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">Últimos pedidos</h3>
    </div>
    <div class="panel-body">
        <div id="dados">
            <div class="table-responsive">
                <table class='table'>
                    <tr>
                        <th>Nº Pedido</th>
                        <th>Cliente</th>
                        <th>STATUS</th>
                        <th>DATA</th>
                        <th>HORA</th>
                        <th>Ações</th>
                    </tr>


                    <?php
                    foreach ($pedidos->encontrarTudo() as $chave => $valor):
                        echo "<tr>";
                        echo "<td>" . $valor->ID_PDV . "</td>";
                        echo "<td>" . $valor->clientes_ID_CLIENTE . "</td>";
                        echo "<td>" . $valor->STATUS . "</td>";
                        echo "<td>" . $valor->DATAPDV . "</td>";
                        echo "<td>" . $valor->HORA . "</td>";
                        echo "<td>
                                        <button type='button' onclick='window.location.href='finalizaPedido.php'' class='btn btn-warning btn-sm'>Editar</button>
                                        <button type='button' onclick='window.location.href='finalizaPedido.php'' class='btn btn-success btn-sm'>Concluir</button>
                                        <button type='button' onclick='window.location.href='finalizaPedido.php'' class='btn btn-danger btn-sm'>Apagar</button>
                                        </td>";
                        echo "</tr>";
                    endforeach;

                    ?>


                </table>
            </div>
        </div>
        </article>
    </div>
</div></div></div></div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>



<?php require_once 'classes/require/footer.php' ?>

</div>
<p class="my-page-footer">
    <span id="my-footnote-links">Designed by <a href="www.mycrosan.com.br" target="_blank">Mycrosan</a>.</span>
</p>
</div>












</body>
</html>