<?php
$db['host'] = "localhost";
$db['nome'] = "acs_ok";
$db['user'] = "root";
$db['pass'] = "";

mysql_connect($db['host'], $db['user'], $db['pass']);
mysql_select_db($db['nome']);

$req = "SELECT * FROM produtos  WHERE DESCRICAO LIKE '%".$_REQUEST['term']."%'";

$query = mysql_query($req);

while($row = mysql_fetch_array($query))
{
  $results[] = array(
      'id' => $row['ID_PRODUTO'],
      'label' => $row['DESCRICAO'],
      'preco' => $row['PRECO']);
      }
echo json_encode($results);
?>
