<?php
include ('conexion.php');

ini_set('display_errors', 'On');
ini_set('display_errors', 1);
ini_set('upload_max_filesize', '20M');
ini_set('post_max_size', '200M');
ini_set('max_execution_time','120');

$date_album = $_POST['date_album'];
$title_album = $_POST['title_album'];
$desc_corta = $_POST['desc_corta'];
$desc_larga = $_POST['desc_larga']; 
$archivo = $_FILES['archivo']['tmp_name'];
$portada = $_FILES['portada']['tmp_name'];

$result2 = mysqli_query($con,"SELECT * FROM Album WHERE Titulo_album='$title_album'")or die("Problemas enla consulta: ".mysqli_error());

$total = mysqli_num_rows($result2);	
if($total==0){//valida que El album no exista	
	$cantidad = count($archivo);
	$nuevodirectorio = "../img/pic/";
	if($portada != "" && $archivo!=""){
	//INSERTA ITERATIVAMENTE
		$cont = 0;
		$tipe = 0;
		$archivo_invalido = "";
		$album_id = "";

		$nombre_portada = $title_album."-portada.jpg";
		$archivo_subir_1 = $nuevodirectorio . $nombre_portada;

		//separamos los trozos del archivo, nombre extension
	    $trozos = explode(".", $_FILES["portada"]["name"]);
	    //obtenemos la extension
	    $extension = end($trozos);

	    //Inicia inserccion de portada++++++++++++++++++++++++++++++++++++++++++++++++++
	    //si la extensión es una de las permitidas
	    if(checkExtension($extension) === TRUE){	
			if (move_uploaded_file($portada, $archivo_subir_1)) {
				
				$resultado = substr($archivo_subir_1, 3);//elimina el ../ de la ruta
				$query1 = "INSERT INTO Album (Titulo_album,Fecha,Foto_portada,Descrip_corta,Descrip_larga,Principal)VALUES ('$title_album','$date_album','$resultado','$desc_corta','$desc_larga','0')";
				
				$result = mysqli_query($con,$query1);

				if (!$result){
					echo 'La consulta SQL contiene errores.'.mysqli_error()."\n";
				}else {
					//echo "DATOS INSERTADOS CORRECTAMENTE\n";
				}
				//echo "subio portada\n";
				
			} else {
				print("Error de conexion con el servidor.<br/>"); 
				echo "Ocurrio un problema al subir los archivos";
			}

			//Termina inserccion de portada ++++++++++++++++++++++++++++++++++++
			//Consulta para obtener el id del album.
			$result1 = mysqli_query($con,"SELECT Id_album FROM Album WHERE Titulo_album='$title_album'")or die("Problemas enla consulta: ".mysqli_error());
		
			while ($reg = mysqli_fetch_array($result1)){
				$album_id = $reg['Id_album'];			
			}		

			for ($n="0"; $n<$cantidad; $n++) {
				$archivo_codigo = $archivo[$n]; 
				$nombre_archivo = $title_album."-".$n.".jpg";
				$archivo_subir = $nuevodirectorio . $nombre_archivo;
				
				$trozos1[$n] = explode(".", $_FILES["archivo"]["name"][$n]);
				$extension1[$n] = end($trozos1[$n]);
				//echo "extension-".$extension1[$n]."\n";

				if(checkExtension($extension1[$n]) === TRUE){
					$resultado2 = substr($archivo_subir, 3);//elimina el ../ de la ruta
					if (move_uploaded_file($archivo_codigo, $archivo_subir)) {

						$query2 = "INSERT INTO Imagen(Id_album,nombre)VALUES ('$album_id','$resultado2')";
						$result2 = mysqli_query($con,$query2);

						if (!$result2){
							echo 'La consulta SQL contiene errores.'.mysqli_error()."\n";
						}else {
							//echo "DATOS INSERTADOS CORRECTAMENTE\n";
						}

						$cont+=1;
					} else {
						/*echo "Ocurrio un problema al subir los archivos, revise sus archivos o consulte al WebMaster, y recuerde que la portada no se debe incluir en las fotos del album.";*/
						echo "Ocurrio un problema al subir los archivos, revise sus archivos o consulte al WebMaster.";
					}
				}else{//valida la extension del archivo imagenes
					$tipe +=1;
					$archivo_invalido .= $_FILES["archivo"]["name"][$n]." -";//obtiene el nombre del archivo invalido
				}
			}//cierra bule for
			mysqli_close($con);
			if($tipe == 0){
				if($cont>0){
					echo "¡Registro de Album Exitoso.!";
				}
			}else{//valida la extension del archivo imagenes
				echo "¡Los archivos $archivo_invalido no se pudieron agregar, Solo se permite subir Archivos de imagen con extensión '.jpg' o '.jpeg'.!";
			}
		}else{
			echo "Solo se permite subir Archivos de imagen con extensión '.jpg' o '.jpeg'.";
		}
	}else{
		echo "Verifique sus campos que sus campos no esten vacios  y recuerde que la portada no se debe incluir en las fotos del album1.";
		echo $portada ."-";
	}

}else{
	echo "El Album ya existe, intente con otro nombre.";
}


function checkExtension($extension){
    //aqui podemos añadir las extensiones que deseemos permitir
    $extensiones = array("jpg","jpeg");
    if(in_array(strtolower($extension), $extensiones))
    {
        return TRUE;
    }else{
        return FALSE;
    }
}

?>