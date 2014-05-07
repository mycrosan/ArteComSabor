<?php
$db['host'] = "localhost";
$db['nome'] = "acs_ok";
$db['user'] = "root";
$db['pass'] = "";

mysql_connect($db['host'], $db['user'], $db['pass']);
mysql_select_db($db['nome']);

$req = "SELECT * FROM clientes WHERE TELEFONE LIKE '%".$_REQUEST['term']."%'";

$query = mysql_query($req);

while($row = mysql_fetch_array($query))
{
  $results[] = array(
      'label' => $row['TELEFONE'],
      'nome' => $row['NOME'],
      'endereco' => $row['ENDERECO'],
      'bairro' => $row['BAIRRO']);
}
echo json_encode($results);
?>
