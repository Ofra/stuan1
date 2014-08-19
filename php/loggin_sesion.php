<?php
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
	//permite incializar una sesion con el servidor siempre va al principio de todo
	session_start();
	include('conexion.php');
	if(isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['pass']) && !empty($_POST['pass'])){
		$query = mysql_query("SELECT * from usuario where User='$_POST[user]'",$con) or die("Error en: $query" . mysql_error());;
		
		$sesion = mysql_fetch_array($query);

		if($_POST['pass'] == $sesion['Password']){
			$_SESSION['user'] = $sesion['Id_user'];
			$_SESSION['name_user'] = $sesion['Name'];
			echo "Sesion Exitosa";
			//header('Location: ../index.php');
		}else{
			echo "Sesion Erronea";
			session_unset();
			session_destroy();
			header('Location: ../index.php');
		}
	}else{
		echo "Debes llenar ambos campos";
	}
?>