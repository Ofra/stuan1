<?php
include ('conexion.php');

$title = $_POST['title'];
$id = $_POST['id'];
$result2 = mysqli_query($con,"SELECT * FROM Album WHERE Titulo_album='$title'")or die("Problemas enla consulta: ".mysqli_error());

$total = mysqli_num_rows($result2);  
if($total==0){//valida que El album no exista 
	$result1 = mysqli_query($con,"UPDATE Album SET Titulo_album='$title' WHERE Id_album ='$id'")or die("Problemas enla consulta: ".mysqli_error());  

            if (!$result1){
                    echo 'La consulta SQL contiene errores.'.mysqli_error()."\n";
                }else {
                    echo "Los cambios se Guardaron Correctamente.";
                }
        mysqli_close($con);

}else{
    echo "El Album ya existe, intente con otro nombre.";
}

?>