<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
	   include "header1.php";
	}else{ 	
		include "header.php";
	}
?>

<section id="prensa">
	<div class="cabecera3"><em>Prensa y Propaganda</em><br /><span class="triangulo3"></span></div>
	<p>La Secretaría de Prensa y Propaganda del Sindicato de Trabajadores de la Universidad Autónoma de Nayarit es considerada un espacio donde se registran las actividades académicas, administrativas, político y social. El objetivo fundamental de esta sería atender  y resolver las necesidades de producción y difusión en su conjunto con las distintas secretarías de la comunidad universitaria y demás organizaciones alternas del sindicato.  </p>
	<p>Es considerada también como responsable de la elaboración de todo tipo de material audiovisual (imágenes, spots, videos, entrevistas etc.). De igual forma esta secretaría está capacitada para brindar total cobertura en los eventos académicos que se concreten en dicha Universidad: jornadas académicas, investigaciones, congresos,  seminarios, reuniones sociales; Así como  eventos Políticos y sociales, marchas y manifestaciones organizadas por el STUAN. </p>
	<p>La secretaría de prensa y propaganda sostiene una gran responsabilidad  a partir de la elaboración de un plan de medios de comunicación con la finalidad de mantener en circulación la información con respecto a las actividades realizadas por el Sindicato.</p>
	
	<div class="cabecera4"><em>Estas Son las Atribuciones del Secretario de Prensa Y Propaganda, Según el ARTICULO 40  DEL ESTATUTOS.-</em><br /><span class="triangulo4"></span></div>
	<ul>
		<li>Dirigir el periódico del sindicato y garantizar su publicación regular. </li>
		<li>Ser vocero del sindicato ante los órganos de difusión.</li>
		<li>Presidir conjuntamente con el secretario de educación y cultura,  el Consejo editorial del sindicato.</li>
		<li>Difundir las funciones y objetivos del sindicato.</li>
		<li>Dirigir el Área de impresiones del sindicato, dando facilidades a las delegaciones para difundir acuerdos, así como boletines delegacionales.</li>
		<li>Dirigir la publicación teórica del sindicato.</li>
		<li>Acordar con el secretario general los asuntos a su cargo.</li>
		<li>Las demás que le confiere el estatuto, los acuerdos sindicales y  las que se desprendan de la naturaleza de su cargo.</li>
	</ul>
	<a class="icon-news"></a>
</section>

<?php
	include 'footer.php';
?>