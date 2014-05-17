<?php
$db['host'] = "localhost";
$db['nome'] = "acs_ok";
$db['user'] = "root";
$db['pass'] = "";

mysql_connect($db['host'], $db['user'], $db['pass']);
mysql_select_db($db['nome']);
$req = "SELECT * FROM clientes WHERE TELEFONE LIKE '%".$_REQUEST['term']."%'";
<<<<<<< HEAD
$query = mysql_query($req) or die(mysql_error());
=======

$query = mysql_query($req) or die(mysql_error());



>>>>>>> 328c4af7d7721ba7dc461bfb256697ceb9cfa7f1
while($row = mysql_fetch_array($query))
{
  $results[] = array(
      'id' => $row['ID_CLIENTE'],
      'label' => $row['TELEFONE'],
      'nome' => $row['NOME'],
      'endereco' => $row['ENDERECO'],
      'bairro' => $row['BAIRRO']);
}
echo json_encode($results);
?>
