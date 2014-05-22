<?php
$canadians = array(
    'Bieber' => TRUE,
    'Neil Young' => TRUE,
    'Deadmau5' => TRUE,
    'Barack Obama' => FALSE,
    'John Candy' => TRUE,
);
foreach ($canadians as $name => $real) {
    if($real) {
        print $name . ' is Canadian ';echo "<br>";
    }
    elseif(!$real) {
        print $name . ', not Canadian ';echo "<br>";
    }
}
?>