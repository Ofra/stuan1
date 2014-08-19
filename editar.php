<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
		include "header1.php";
		header('Location: index.php');
	}else{ 	
		include "header.php";
	}

	$id_album = $_GET['id'];

	include "php/conexion.php";
	
	$result = mysql_query("SELECT * FROM Album WHERE Id_album = $id_album")or die("Problemas enla consulta: ".mysql_error());
	$result1 = mysql_query("SELECT * FROM Imagen WHERE Id_album = $id_album")or die("Problemas enla consulta: ".mysql_error());


	while ($reg = mysql_fetch_array($result) ) {
		$fecha = $reg['Fecha'];
		$titulo = $reg['Titulo_album'];
		$portada = $reg['Foto_portada'];
		$corta = $reg['Descrip_corta'];
		$larga = $reg['Descrip_larga'];
	}
?>
<script type="text/javascript">
$(document).ready(function(){

    resetear_tags_status();
    cargar_tags_actions('desc_larga');

});
</script>
<section id="administrar">
	<div id="administrar1">
		<form id="admin_gal" name="admin_gal" enctype="multipart/form-data" method="post" action="php/update_Album.php">
			<table>
				<thead><tr>
					<td><a class="icon-image"></a></td>
					<td>
						<h1>Editar Album</h1>
					</td>
				</tr></thead>
				<tr>
					<td></td>
					<td id="date"><p>Fecha<input name="date_album" id="date_album" type="date" value="<?php echo $fecha; ?>" required/> </p></td>
				</tr>

				<tr>
					<td>Título del Album</td>
					<td><input name="title_album" id="title_album" type="text" style="width:90%;" placeholder="Maximo 35 caracteres" maxlength="35" value="<?php echo $titulo; ?>" required/> 
					<br/><input id="update_title" type="button" value="Modificar Título" /></td>
				</tr>

				<tr>
					<td>Foto de Portada</td>
					<td><img src="<?php echo $portada; ?>" width="70px"><br/><input name="archivo1" class="archivo" id="portada_album" type="file" value="hola"required/> </td>
				</tr>

				<tr>
					<td>Descripción corta</td>
					<td> <textarea name="desc_corta" id="desc_corta"  placeholder="Maximo 250 caracteres" maxlength="250" style="width:90%; height:100px;" ><?php echo $corta;?></textarea> </td>
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
					<td><textarea name="desc_larga" id="desc_larga"style="width:90%; height:350px; overflow:scroll;" ><?php echo $larga;?></textarea> </td>
				</tr>
			
			</table>

			<div id="modifica_album1">

				<h2>Galería Fotográfica</h2>	

				<?php
					while ($reg1 = mysql_fetch_array($result1) ) {
				?>
					<figure class="picture1">
							
						<div id="datos1">
							<span class="span-close" value="">
								<a  class="icon-close" >
									<span class="tip-content">Eliminar Foto</span>
								</a> 
								<input type="text" class="fot" style="display:none;"value="<?php echo $reg1['Id_imagen']; ?>"/>
							</span>
						</div>
						
						<img src="<?php echo $reg1['nombre']; ?>" >
					</figure>
					
				<?php
					}
				?>
			</div>

			<table>
				<tr>
					<td>Agregar Fotos al album</td>
					<td><input name="archivo[]" id="fotos_album" class="archivo" type="file" multiple="multiple" required/> </td>
				</tr>
				<tr>
					<td></td>
					<td><input name="cancel_foto" id="cancel_foto"type="button" value="Cancelar" onclick="window.location.href= 'modifica_album.php';" /> 
						<input id="input-update" type="text" value=" <?php echo $id_album; ?>" hidden />
						<!--<input id="agregar_foto" name="agregar_foto" type="submit" value="Agregar"  onclick="upload_ajax($('#title_album').val(),$('#date_album').val(),$('#desc_corta').val(), $('#desc_larga').val(), document.getElementById('fotos_album'),document.getElementById('portada_album') );return false;"/>-->
						<a onclick="update_ajax($('#title_album').val(),$('#date_album').val(),$('#desc_corta').val(), $('#desc_larga').val(), document.getElementById('fotos_album'),document.getElementById('portada_album'), $('#input-update').val());return false;" id="agregar_foto">Guardar Cambios</a>
					</td>
						
				</tr>
			</table>

		</form>
	</div>
</section>

<?php
	include "footer.php";
	//eliminar.php?id=<?php echo $reg1['Id_imagen']; 
?>