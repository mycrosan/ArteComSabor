<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Auto Complete</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

                   $('#TELEFONE').autocomplete({
                    source: 'classes/retornaCliente.php',
                    minLength: 1,
                    select: function(evento,conteudo){
                        console.log(conteudo);
                        $('#NOME').val(conteudo.item.nome);
                }
            });
        });


    </script>
</head>
<body>



<label>Cliente:</label>
<form name='form' id='form' method='post'>
<input type='text' id='TELEFONE' name='TELEFONE'' size='60'/>
<input type='text' id='NOME' name='NOME' size='60'/>
</form>
</body>
</html>

