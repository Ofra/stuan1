<?php

include "conexion.php";

$id_foto = $_POST['id_foto'];

	mysql_query("DELETE FROM Imagen WHERE Id_imagen = '$id_foto'")or die("Problemas enla consulta: ".mysql_error());;

	echo "Se ha eliminado la foto Exitosamente";
?>