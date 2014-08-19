<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
	   include "header1.php";
	}else{ 	
		include "header.php";
	}
?>

<section id="contacto">
	<h1>¡Comunicate con Nosotros!</h1>
	<a class="icon-feed"></a>
	<div id="contacto1">
		<form name="contact1" id="contact1" method="post" action="php/contact.php">
			<a class="icon-mail"></a>
			<table>
				<tr>
					<td>Nombre Completo: </td>
					<td> <input name="nombre" id="nombre" type="text" required/></td>
				</tr>
				<tr>
					<td>E-mail: </td>
					<td> <input name="correo" id="correo" type="email" placeholder="usuario@dominio.com" required/></td>
				</tr>
				<tr>
					<td>Asunto: </td>
					<td> <input name="asunto" id="asunto" type="text"required/></td>
				</tr>
				<tr>
					<td>Mensaje: </td>
					<td> <textarea name="mensaje" id="mensaje"  placeholder="Escribenos tu comentario, duda o sugerencia, pronto te responderemos!"required></textarea> </td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="submit" name="sub_contacto" value="Enviar"onclick="if( $('#nombre').val() != '' && $('#correo').val()!= '' && $('#asunto').val() !='' && $('#mensaje').val()!= ''){alert('Se enviara una copia a su correo.\n ¡Gracias por contactarnos!');}" ></td>
				</tr>
			</table>
		</form>
	</div>
</section>

<?php
	include "footer.php";
?>