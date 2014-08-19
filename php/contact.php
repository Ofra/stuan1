<?php
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
	require_once('class.phpmailer.php');


	$name=$_POST['nombre'];
	$correo=$_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$mail = new PHPMailer();
	//indico a la clase que use SMTP
	$mail->IsSMTP();
	//permite modo debug para ver mensajes de las cosas que van ocurriendo
	//$mail->SMTPDebug = 1;
	//Debo de hacer autenticaciÃ³n SMTP
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure="ssl";
	//indico el servidor de Gmail para SMTP
	$mail->Host="smtp.gmail.com";
	//indico el puerto que usa Gmail
	$mail->Port=465;
	//indico un usuario / clave de un usuario de gmail
	$mail->Username = "stuantepicnayarit@gmail.com";
	$mail->Password = "sindicato...";
	$mail->SetFrom('stuantepicnayarit@gmail.com', 'STUAN');
	//$mail->addReplyTo($correo, $name);
	$mail->AddCC($correo);
	$mail->AddCC("magia_freak@hotmail.com");
	$mail->AddCC("stuan_tepic@hotmail.com");
	$mail->Subject = $asunto;
	$mail->MsgHTML("De: ".$name."<br />Correo: ".$correo. "<br /><br />Mensaje: ".$mensaje);
	//$mail->AddAttachment(""); 
	//indico destinatario
	$address = $correo;
	$mail->AddAddress("stuantepicnayarit@gmail.com", $name);
	if(!$mail->Send()) {
		echo "Error al enviar: " . $mail->ErrorInfo;
	} else {
		echo "Mensaje enviado!";
		header('Location: ../contacto.php');
	}
?>