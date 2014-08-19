 <?php
	session_start();
	
	if (!isset($_SESSION['user'])){
		include "header1.php";
		header('Location: index.php');
	}else{ 	
		include "header.php";
	}
?>
<!-- 

		Nombre: Insertar TAGS 
		Version: 0.1
		Autor: http://martin.com.uy

		-->

<script type="text/javascript">
$(document).ready(function(){

    resetear_tags_status();
    cargar_tags_actions('desc_larga');

});
</script>
<section id="administrar">
	<div id="administrar1">
		<form id="admin_gal" name="admin_gal" enctype="multipart/form-data" method="post" action="php/upload.php">
			<table>
				<thead><tr>
					<td><a class="icon-image"></a></td>
					<td>
						<h1>Agregar Album</h1>
					</td>
				</tr></thead>
				<tr>
					<td></td>
					<td id="date"><p>Fecha<input name="date_album" id="date_album" type="date" value="<?php echo date("Y-m-d"); ?>" required/> </p></td>
				</tr>

				<tr>
					<td>Título del Album</td>
					<td><input name="title_album" id="title_album" type="text" style="width:90%;" placeholder="Maximo 35 caracteres" maxlength="35" required/> </td>
				</tr>

				<tr>
					<td>Foto de Portada</td>
					<td><input name="archivo1" class="archivo" id="portada_album" type="file" required/> </td>
				</tr>

				<tr>
					<td>Descripción corta</td>
					<td> <textarea name="desc_corta" id="desc_corta"  placeholder="Maximo 250 caracteres" maxlength="250" style="width:90%; height:100px;"></textarea> </td>
				</tr>
				<tr>
					<td></td>
					<td>
						<div class="botones_textarea_container">
							<div id="insertar_strong" class="boton_textarea_cursor_pointer" title="Negrita">strong</div> <div id="insertar_em" class="boton_textarea_cursor_pointer" title="Cursiva">em</div> <div id="insertar_a" class="boton_textarea_cursor_pointer" title="Enlace">a</div><div id="insertar_br" title="Salto de linea"class="boton_textarea_cursor_pointer">br</div>
						</div>
					</td>
				</tr>
				<tr>	
					<td>Descripción larga</td>
					<td><textarea name="desc_larga" id="desc_larga"style="width:90%; height:350px; overflow:scroll;"></textarea> </td>
				</tr>

				<tr>
					<td>Seleccionar Fotos</td>
					<td><input name="archivo[]" id="fotos_album" class="archivo" type="file" multiple="multiple" required/> </td>
				</tr>

				<tr>
					<td></td>
					<td><input name="cancel_foto" id="cancel_foto"type="button" value="Cancelar" onclick="window.location.href= 'modifica_album.php';" /> 
						<!--<input id="agregar_foto" name="agregar_foto" type="submit" value="Agregar"  onclick="upload_ajax($('#title_album').val(),$('#date_album').val(),$('#desc_corta').val(), $('#desc_larga').val(), document.getElementById('fotos_album'),document.getElementById('portada_album') );return false;"/>-->
						<a onclick="upload_ajax($('#title_album').val(),$('#date_album').val(),$('#desc_corta').val(), $('#desc_larga').val(), document.getElementById('fotos_album'),document.getElementById('portada_album') );return false;" id="agregar_foto">Agregar</a>
					</td>
						
				</tr>
			</table>
		</form>
	</div>
</section>

<?php
	include "footer.php";
?> 