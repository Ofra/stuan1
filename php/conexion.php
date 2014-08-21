<?php

$host = 'localhost';
$user = "root";
$pw = '';
$db= 'stuan_db';

$con = new mysqli($host,$user,$pw,$db);
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}
/*

$con = mysql_connect($host,$user,$pw)or die("No se pudo conectar a la base de datos");
mysql_select_db($db,$con)or die("No se pudo conectar a la base de datos");*/
//mysql_free_result($query);
//mysql_close($con);
?>