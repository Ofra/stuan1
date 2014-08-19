<?php
ini_set('display_errors', 'On');
ini_set('display_errors', 1);

$archivo = $_FILES['archivo']['tmp_name'];
$cantidad = count($archivo);
//INVENTADO NOMBRE DE CARPETA
$hora = date("H")+8; 
$carpeta = date("d-m-Y $hora:i:s");
$nuevodirectorio = "img/$carpeta";
mkdir ($nuevodirectorio);
$directorio = "$nuevodirectorio/";

//INSERTA ITERATIVAMENTE
for ($n="0"; $n<$cantidad; $n++) {
	$archivo_codigo = $archivo[$n]; 
	$nombre_archivo = $n.".jpg";
	$archivo_subir = $directorio . $nombre_archivo;

	if (move_uploaded_file($archivo_codigo, $archivo_subir)) {
		print("OK.<br/>");
	} else {
		print("Error de conexion con el servidor.<br/>"); 
	}
}
?>