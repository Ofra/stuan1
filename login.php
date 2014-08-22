
<section id="loggin"> 
	<div id="loggin1">
		<div id="loggin2">

			<a class="icon-close"></a>
			
     		<div class="cabecera"><a class="icon-user"><em>Bienvenido</em></a><br /><span class="triangulo"></span></div>
			<h3>STUAN</h3>
		 </div>
		<div id="frm_login">
			<a class="icon-briefcase"></a>
			<form name="form1" id="form1" method="post" action="php/loggin_sesion.php">
				<table>
					<tr>
						<td>Usuario</td>
						<td><input  type="text" name="user" id="user" autofocus required/></td>
					</tr>
					<tr>
						<td>Contraseña</td>
						<td><input  type="password" name="pass" id="pass" required/></td>
					</tr>
					<tr>
						<td>
						<td>
						<a onclick="login_ajax($('#user').val(), $('#pass').val());return false;" id="submitt">Enviar</a>
						</td>
					</tr>
				</table>
				
			</form>
		</div>
	</div>
</section>