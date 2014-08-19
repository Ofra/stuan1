<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
	   include "header1.php";
	}else{ 	
		include "header.php";
	}
?>

<section id="ubicacion">
	<div class="cabecera1"><a class="icon-user"><em> ¡Visitanos, te esperamos!</em></a><br /><span class="triangulo1"></span></div>
	<iframe src="https://mapsengine.google.com/map/embed?mid=zuoai6bBtnT4.kymQ1fnvZGDQ" width="100%" height="580"></iframe>
</section>

<?php
	include "footer.php";
?>
