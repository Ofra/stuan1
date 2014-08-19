<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
	   include "header1.php";
	}else{ 	
		include "header.php";
	}
?>
<section id="mis_vis">
	<h1>Misión y Visión</h1>
	<section id="mision">
		<h2  id="mis" title="Clic para ver mas..">Misión... <br /><br /><a class="icon-bookmarks"></a></h2>


		<h2 id="vis" title="Clic para ver mas..">Visión...<br /><br /><a class="icon-stats"></a></h2>
		

		<section id="decription_mis">
			<div id="mis_descrip">
				<a class="icon-bookmarks"></a>
				<p>Misión: Alcanzar un buen posicionamiento en el entorno universitario y social  a través de nuestro propio contrato colectivo de trabajo que mejore las condiciones laborales entre los universitarios y contribuya al fortalecimiento institucional, así como el establecimiento de relaciones  con otras organizaciones sociales y políticas. </p>
			</div>

			<div id="vis_descrip">
				<a class="icon-stats"></a>
				<p>Visión: El sindicato de trabajadores de la universidad autonoma de nayarit (stuan) es una organización legalmente constituída para la defensa íntegra y solidaria; nuestras acciones se fundamentan en los principios de igualdad, respeto, pluralidad, solidaridad, honestidad y transparencia en un marco de democracia plena de todos los miembros que voluntariamente la conforman, sin distinción del tipo de trabajo que desempeñen en la institución, con pleno apego  al estado de derecho.</p>
			</div>
		</section>
	</section>
</section>
<?php
	include "footer.php";
?>