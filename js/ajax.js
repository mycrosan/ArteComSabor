$(document).ready(function () {
    // Chamo o Auto complete do JQuery ui setando o id do input, array com os dados e o mínimo de caracteres para disparar o AutoComplete
    $('#txtTelefone').autocomplete({
        source: 'classes/retornaCliente.php',
        minLength: 1,
        select: function (evento, conteudo) {
            //console.log(conteudo);
            $('#txtIDCliente').val(conteudo.item.id);
            $('#txtCliente').val(conteudo.item.nome);
            $('#txtEndereco').val(conteudo.item.endereco);
            $('#txtBairro').val(conteudo.item.bairro);
            $('#txtObs').val(conteudo.item.obs);
        }
    });
});
$(document).ready(function () {
    // Chamo o Auto complete do JQuery ui setando o id do input, array com os dados e o mínimo de caracteres para disparar o AutoComplete
    $('#txtDescricaoProduto').autocomplete({
        source: 'classes/retornaProduto.php',
        minLength: 2,
        select: function (evento, conteudo) {
            $('#txtIDProduto').val(conteudo.item.id);
            $('#txtPreco').val(conteudo.item.preco);


        }
    });
});
function getPedidoPizza() {
    $.ajax({
        url: 'pedidoPizza.php',
        success: function (data) {
            $('#dados').html(data);
        }
    });
}