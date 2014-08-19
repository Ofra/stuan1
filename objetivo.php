<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
	   include "header1.php";
	}else{ 	
		include "header.php";
	}
?>
	<section id="objetivo">
		<a class="icon-bookmark"></a>
		<div id="objetivo_gral">
			<h2>Objetivos</h2>
			<h1><em>Objetivo General</em></h1>
			<p>Contribuir al desarrollo universitario con apego al estado de derecho mediante una practica sindical sustentada en los valores y principios establecidos en nuestra carta magna.</p>
		</div>
		<div id="objetivo_part">
			<h3><em>Objetivo Particular</em></h3>
			
			<ul id="lista_obj0">
				<strong><li id="objli1" class="objli" title="clic para ver mas">1.- Defender los intereses de sus afiliados mediante:<a class="icon-chevron-circle-down"></a></strong></li>
				<ul id="lista1_obj">
					<li>El estudio, mejoramiento y defensa de los intereses económicos, sociales  profesionales de sus afiliados.</li>
					<li>El cumplimiento del contrato colectivo de trabajo así como las diversas leyes, disposiciones y convenios que beneficien a los trabajadores.</li>
					<li>La mejoría de los salarios en un nivel que satisfaga decorosamente las necesidades reales del trabajador.</li>
					<li>La superación de los trabajadores mediante su participación activa, creativa y critica, en la adquisición de los conocimientos humanísticos, científicos, técnicos, culturales y artísticos, así como la aplicación de dichos conocimientos para y en la transformación social.</li>
					<li>El mejoramiento de las condiciones de trabajo.</li>
					<li>La adaptación de las jornadas de trabajo.</li>
					<li>La lucha por el mejoramiento de la situación económica, social, política y jurídica de los trabajadores.</li>
					<li>El establecimiento de servicios sociales para sus afiliados, adquisición de inmuebles necesarios para sus operaciones y todas las iniciativas jurídicas necesarias para el desarrollo de sus actividades.</li>
				</ul>
				<strong><li class="objli">2.- La garantía de su autonomía e independencia política en relación con las autoridades de la institución, con los partidos políticos, con las organizaciones gremiales que no sean democráticas e independientes del Estado y con el Estado mismo.</li></strong>
				<strong><li id="objli2" class="objli" title="clic para ver mas">3.- La participación en la problemática social y política del país, mediante:<a class="icon-chevron-circle-down"></a></li></strong>
				<ul id="lista2_obj">
					<li>La identidad con  los trabajadores capaces de llevar a cabo de manera consciente, el cambio económico y sociopolítico de la sociedad y lograr el establecimiento de un orden social justo que permita a los trabajadores vivir del producto de su propio trabajo.</li>
					<li>El fomento, establecimiento y conservación, de acuerdo a los principios del sindicalismo independiente y democrático de las relaciones fraternales y de la solidaridad con las agrupaciones de trabajadores del país y del extranjero.</li>
				</ul>
				<strong><li class="objli">4.- La defensa permanente de las universidades públicas, de su autonomía, el replanteamiento continuo de sus objetivos y la democratización de la enseñanza.</strong></li>		
			</ul>
		
	</div>
	</section>

<?php
	include "footer.php";
?>