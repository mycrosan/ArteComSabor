<?php
$mysql_server = 'localhost';
$mysql_login = 'root';
$mysql_password = '';
$mysql_database = 'acs_ok';

mysql_connect($mysql_server, $mysql_login, $mysql_password);
mysql_select_db($mysql_database);

$req = "SELECT * "
."FROM clientes "
."WHERE TELEFONE LIKE '%".$_REQUEST['term']."%' ";

$query = mysql_query($req);

while($row = mysql_fetch_array($query))
{
$results[] = array('label' => $row['TELEFONE']);
}

echo json_encode($results);
?>