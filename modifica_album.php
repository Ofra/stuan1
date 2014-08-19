<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
		include "header1.php";
		header('Location: index.php');
	}else{ 	
		include "header.php";
	} 
	include "php/conexion.php";
	
	$result = mysql_query("SELECT * FROM Album Order by Fecha Desc")or die("Problemas enla consulta: ".mysql_error());
	$result1 = mysql_query("SELECT * FROM Album Order by Fecha Desc")or die("Problemas enla consulta: ".mysql_error());
	$result2 = mysql_query("SELECT Id_album FROM Album WHERE Principal = '1'")or die("Problemas enla consulta: ".mysql_error());
	
	while($rs = mysql_fetch_array($result2)){
		$album_principal_actual = $rs['Id_album'];
	}

?>

<section id="modifica_album">
	<h1>Administración de Galería <a class="icon-tools"></a></h1>
	<div id="modifica_album1">

		<h2></h2>
		<a href="agregar_album.php" class="icon-diff-added">  Crear Album</a>
		<label>Seleccona el Album principal</label>
		<select id="select_princ"> 
			<option>--</option>
		<?php
			while ($reg1 = mysql_fetch_array($result1) ) {
				//valida que el album actual sea igual al del array para seleccionarlo
				if($album_principal_actual == $reg1['Id_album']){
					echo '<option value="'.$reg1['Id_album'].'" selected>'. $reg1['Titulo_album'].'</option>';
				}else{
		?>
					<option value="<?php echo $reg1['Id_album']; ?>" ><?php echo $reg1['Titulo_album']; ?></option>

		<?php 
			}	
			} 
		?>	
		</select> 
		<br />
		<br />

		<?php
			while ($reg = mysql_fetch_array($result) ) {
		?>
			<figure class="picture">
				<div id="datos">
					<label> <?php echo $reg['Titulo_album'];?> </label><br/>
					<label><?php echo $reg['Fecha'];?> </label><br/>
				</div>
				<div id="datos1">
					<!--<a href="eliminar.php?id=<?php echo $reg['Id_album']; ?>" class="icon-close" >
						<span class="tip-content">Eliminar album</span>
					</a>-->
					<span class="span-close1" value="">
						<a  class="icon-close" >
							<span class="tip-content">Eliminar Album</span>
						</a> 
						<input type="text" class="fot" style="display:none;"value="<?php echo $reg['Id_album']; ?>"/>
					</span>

					<span id="span1">
						<a href="editar.php?id=<?php echo $reg['Id_album']; ?>" class="icon-pencil" >
							<span class="tip-content">Editar album</span>
						</a>
					</span>
				</div>
				<img src="<?php echo $reg['Foto_portada']; ?>" >
			</figure>
			
		<?php
			}
		?>
	</div>
</section>
<?php
	include "footer.php";


/*
<figure class="picture">
				<div id="datos">
					<label>$reg['Titulo_album']</label><br/>
					<label>$reg['Fecha']</label><br/>
				</div>
				<div id="datos1">
					<a href="eliminar.php?id= echo $rer['Id_album'];" class="icon-close" ><span class="tip-content">Eliminar album</span></a>
					<span><a href="editar.php?id= echo $rer['Id_album'];" class="icon-pencil" ><span class="tip-content">Editar album</span></a></span>
				</div>
				<img src="$reg['Foto_portada']" >
			</figure>*/

?>