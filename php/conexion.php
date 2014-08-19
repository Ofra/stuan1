<?php

$host = 'localhost';
$user = "root";
$pw = '';
$db= 'stuan_db';

$con = mysql_connect($host,$user,$pw)or die("No se pudo conectar a la base de datos");
mysql_select_db($db,$con)or die("No se pudo conectar a la base de datos");

//mysql_free_result($query);
//mysql_close($con);
?>