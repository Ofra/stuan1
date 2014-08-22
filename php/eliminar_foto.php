<?php

include "conexion.php";

$id_foto = $_POST['id_foto'];

	mysqli_query($con,"DELETE FROM Imagen WHERE Id_imagen = '$id_foto'")or die("Problemas enla consulta: ".mysqli_error($con));;

	echo "Se ha eliminado la foto Exitosamente";
?>