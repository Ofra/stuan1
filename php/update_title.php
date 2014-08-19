<?php
include ('conexion.php');

$title = $_POST['title'];
$id = $_POST['id'];
$result2 = mysql_query("SELECT * FROM Album WHERE Titulo_album='$title'")or die("Problemas enla consulta: ".mysql_error());

$total = mysql_num_rows($result2);  
if($total==0){//valida que El album no exista 
	$result1 = mysql_query("UPDATE Album SET Titulo_album='$title' WHERE Id_album ='$id'")or die("Problemas enla consulta: ".mysql_error());  

            if (!$result1){
                    echo 'La consulta SQL contiene errores.'.mysql_error()."\n";
                }else {
                    echo "Los cambios se Guardaron Correctamente.";
                }
        mysql_close($con);

}else{
    echo "El Album ya existe, intente con otro nombre.";
}

?>