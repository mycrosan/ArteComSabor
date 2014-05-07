<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Auto Complete</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>







<input type="text" id="busca" name="busca">
<input type="text" id="nome" name="nome">








<script>
    $(function() {

        $( "#busca" ).autocomplete(
            {
                source:'fonte.php',
                select: function(event, ui){
                    console.log(ui.item.label);
                }
            });

    });
</script>