<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
		include "header1.php";
		header('Location: index.php');
	}else{ 	
		include "header.php";
	}
?>

<section id="administrar2">
	<div id="administrar3">
		<h1>Selecciona una Tarea</h1>
		<a href="modifica_album.php" class="icon-pictures"> 
			<div id="dos">
				<a class="icon-tools">  Modificar Album</a>
			</div>
		</a>
		<a href="agregar_album.php" class="icon-file-media">
			<div id="uno"> 
				<a  class="icon-diff-added">  Agregar Album</a>
			</div>
		</a>
		
		

	</div>
</section>
<?php
	include "footer.php";
?>

