<?php 
	include 'conexion.php';
	$id = $_POST['id_album'];

	$result0 = mysql_query("SELECT Id_album From Album WHERE Principal ='1'")or die("Problemas enla consulta: ".mysql_error());

	while($reg0 = mysql_fetch_array($result0)){	
			$Id_album_viejo = $reg0['Id_album'];
		}

	$result2 = mysql_query("UPDATE Album SET Principal='0' WHERE Id_album ='$Id_album_viejo'")or die("Problemas enla consulta: ".mysql_error());

	$result = mysql_query("UPDATE Album SET Principal='1' WHERE Id_album ='$id'")or die("Problemas enla consulta: ".mysql_error());
	
	if(!$result){
		echo 'La consulta SQL contiene errores.'.mysql_error()."\n";
	}else{
		$result1 = mysql_query("SELECT Titulo_album FROM Album WHERE Id_album ='$id'")or die("Problemas enla consulta: ".mysql_error());
		
		while($reg = mysql_fetch_array($result1)){	
			$title = $reg['Titulo_album'];
		}

		echo "El Album $title, es ahora el album principal.";
	}
?>