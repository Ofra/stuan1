<?php
    


	session_start();
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);


	include "php/conexion.php";
	if (!isset($_SESSION['user'])){
	   include "header1.php";
	}else{ 	
		include "header.php";
	}


	$id = $_GET['id'];
		
	$query="SELECT * FROM Album WHERE Id_album='$id'";
	$result = mysql_query($query);

	while ($rs = mysql_fetch_array($result)) {
		$titulo = $rs['Titulo_album'];
		$larga = $rs['Descrip_larga'];
		$Foto = $rs['Foto_portada'];
		$fecha = $rs['Fecha'];
	}
	$fecha = explode("-", $fecha);

	$meses = array("Enero","Febrero","Marzo", "Abríl", "Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre", "Diciembre");

	if($fecha[1]<10){
		$fecha[1] = substr($fecha[1], 1);
	}

	$query1="SELECT * FROM Imagen WHERE Id_album='$id'";
	$result1 = mysql_query($query1);

 ?>

<section id="album_ventana">
	<section id="album_ventana1">

		<h1><?php echo $titulo;?></h1>

		
		<div id="separar_galeria">
			<label id="fecha_album_gal"> <?php echo $fecha[2]." de ".$meses[$fecha[1]-1]." del año ".$fecha[0]; ?></label>
			<figure>
				<img id="portada" src="<?php echo $Foto;?>" ;>
			</figure> 
			<p><?php echo $larga;?></p>
		</div>
		


		<section id="galeria_album">
			<div class="container">
			
			<div class="content">
	
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<?php
										while ($rs1 = mysql_fetch_array($result1)) {
									?>
									<li><a href="#"><img src="<?php echo $rs1['nombre'];?>" data-large="<?php echo $rs1['nombre'];?>" alt="image01" data-description="" /></a></li>
									<?php
										}	
									?>
									
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
		
			</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>

		</section>

	</section>

	
</section>

<?php
	include 'footer.php';
?>