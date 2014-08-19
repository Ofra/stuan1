<?php

include "conexion.php";

$id_album = $_POST['id_album'];

	$result = mysql_query("DELETE FROM Imagen WHERE Id_album = '$id_album'")or die("Problemas enla consulta: ".mysql_error());;

	$result1 = mysql_query("DELETE FROM Album WHERE Id_album = '$id_album'")or die("Problemas enla consulta: ".mysql_error());;



                if (!$result && !$result1){
                    echo 'La consulta SQL contiene errores.'.mysql_error()."\n";
                }else {
                    echo "Se ha eliminado el album exitósamente.\n";
                }
?>