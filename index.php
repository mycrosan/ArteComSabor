<?php require_once 'classes/menu.php'; ?>
                            <?php
                            $pedidos = new Pdv();
                            ?>

                            <button type="button" onclick="window.location.href='pedidoPizza.php'" class="btn btn-warning btn-lg">Novo</button>
                            <div id="dados">
                                <table class='table table-condensed'>
                                    <tr>
                                        <th>Nº Pedido</th>
                                        <th>Cliente</th>
                                        <th>STATUS</th>
                                        <th>DATA</th>
                                        <th>HORA</th>
                                        <th>Açãoes</th>
                                    </tr>


                                    <?php
                                    foreach ($pedidos->encontrarTudo() as $chave =>$valor):
                                        echo "<tr>";
                                        echo "<td>".$valor->ID_PDV."</td>";
                                        echo "<td>".$valor->clientes_ID_CLIENTE."</td>";
                                        echo "<td>".$valor->STATUS."</td>";
                                        echo "<td>".$valor->DATAPDV."</td>";
                                        echo "<td>".$valor->HORA."</td>";
                                        echo "<td>ATUALIZR STATUS,CONCLUIR, APAGAR</td>";
                                        echo "</tr>";
                                    endforeach;

                                    ?>


                                </table>
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



<footer class="my-footer clearfix">
    <div class="my-content-layout">
        <div class="my-content-layout-row">
            <div class="my-layout-cell layout-item-0" style="width: 100%">
                <p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p>
                <p>Copyright © 2014. All Rights Reserved.</p>
            </div>
        </div>
    </div>

</footer>

</div>
<p class="my-page-footer">
    <span id="my-footnote-links">Designed by <a href="www.mycrosan.com.br" target="_blank">Mycrosan</a>.</span>
</p>
</div>












</body>
</html>