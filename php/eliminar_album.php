<?php

include "conexion.php";

$id_album = $_POST['id_album'];

	$result = mysqli_query($con,"DELETE FROM Imagen WHERE Id_album = '$id_album'")or die("Problemas enla consulta: ".mysqli_error());;

	$result1 = mysqli_query($con,"DELETE FROM Album WHERE Id_album = '$id_album'")or die("Problemas enla consulta: ".mysqli_error());;



                if (!$result && !$result1){
                    echo 'La consulta SQL contiene errores.'.mysqli_error()."\n";
                }else {
                    echo "Se ha eliminado el album exitósamente.\n";
                }
?>