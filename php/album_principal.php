<?php 
	include 'conexion.php';
	$id = $_POST['id_album'];

	$result0 = mysqli_query($con,"SELECT Id_album From Album WHERE Principal ='1'")or die("Problemas enla consulta: ".mysqli_error($con));

	while($reg0 = mysqli_fetch_array($result0)){	
			$Id_album_viejo = $reg0['Id_album'];
		}

	$result2 = mysqli_query($con,"UPDATE Album SET Principal='0' WHERE Id_album ='$Id_album_viejo'")or die("Problemas enla consulta: ".mysqli_error($con));

	$result = mysqli_query($con,"UPDATE Album SET Principal='1' WHERE Id_album ='$id'")or die("Problemas enla consulta: ".mysqli_error($con));
	
	if(!$result){
		echo 'La consulta SQL contiene errores.'.mysqli_error($con)."\n";
	}else{
		$result1 = mysqli_query($con,"SELECT Titulo_album FROM Album WHERE Id_album ='$id'")or die("Problemas enla consulta: ".mysqli_error($con));
		
		while($reg = mysqli_fetch_array($result1)){	
			$title = $reg['Titulo_album'];
		}

		echo "El Album $title, es ahora el album principal.";
	}
?>