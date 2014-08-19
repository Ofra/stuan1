<?php
	session_start();
	
	if (!isset($_SESSION['user'])){
	   include "header1.php";
	}else{ 	
		include "header.php";
	}
?>
	<section id="message">

		<p class="titulo2"><strong>Mensaje del secretario general<br /> Roberto González</strong></p>
		<figure ><img src="images/sec_gral.jpg" ></figure>
			<p>Este es el primer número de la gaceta oficial de nuestro sindicato, el sindicato de trabajadores de la universidad autónoma de Nayarit. aprovecho la oportunidad para dirigirme a la comunidad universitaria y al pueblo de Nayarit para decirles que el STUAN es una organización de trabajadores universitarios, académicos, manuales y administrativos, cuyo propósito fundamental es la defensa de los derechos laborales y  contribuir al desarrollo de nuestro espacio de trabajo que es la universidad autónoma de Nayarit.</p>
			<p>Considero oportuno aclarar las criticas que se nos hacen, fundamentalmente aquellas consistentes en que somos una organización rijosa y peleonera, que pretendemos desestabilizar la universidad con fines perversos. nada de eso. somos una organización que no nació bajo el impulso de las autoridades rectorales como han surgido otras organizaciones en la universidad. Nacimos como una necesidad de tener una organización independiente de la rectoría y de los eternos cacicazgos sindicales que se han entronizado en la institución y que hoy constituyen un cáncer para el desarrollo universitario.</p>
			<p>Esa es nuestra diferencia con otras organizaciones sindicales. Por eso mismo, nosotros si actuamos cuando se nos rasuran las prestaciones, la muestra esta en que tenemos demandas interpuestas ante las instancias laborales con los temas de pensiones, con la clausula 63 en el caso de los académicos y de la 80 en el caso de los administrativos y manuales, con el tema de los aguinaldos, con las nivelaciones salariales y muy pronto estaremos demandando nuestro propio contrato colectivo de trabajo. Al interponer estas demandas no estamos señalando que seamos rijosos o peleoneros con las autoridades, simplemente somos firmes en la defensa del derecho de los trabajadores. en ese marco, nuestra postura con las autoridades rectorales es de colaboración. De hecho estamos colaborando con la universidad en gestiones en el plano federal que muy pronto tendrán resultados tangibles.</p>
			<p>Nuestro sindicato no es una organización que busque solamente la defensa de los derechos laborales. también buscamos que nuestro espacio de trabajo, que es la UAN, funcione adecuadamente y sea una universidad de prestigio y exitosa. Por eso estamos también a favor de la transparencia y la rendición de cuentas, del cambio de modelo universitario a fin de que la institución se convierta en pilar del crecimiento económico, social y político del estado, y del fortalecimiento de la democracia interna como forma de gobierno universitario.</p>
			<p>Es importante decirles a los trabajadores académicos y administrativos, que nosotros no estamos peleados con ellos. Simplemente no compartimos las posturas de los lideres que solapan las violaciones a los contratos o que se sirven de las organizaciones para lograr fines personales. Por el contrario, si los liderazgos de esas organizaciones mantuvieran la postura de ser firmes e indeclinables en la defensa de los derechos laborales, seriamos los primeros en reconocerlos y felicitarlos por ello.</p>
			<p>Queremos decirles también a los trabajadores académicos y administrativos que ya hemos avanzado. los primeros ocho años de existencia fueron de resistencia a la embestida por desaparecernos como sindicato. no pudieron. hoy estamos logrando que se nos cumpla el derecho a pesar de que haya quienes se dicen defensores de los trabajadores en el discurso pero en los hechos actúan para que no se nos cumpla. Pero esas intentonas no prosperarán por una simple razón: tenemos firmeza en nuestras convicciones y somos un sindicato con mucha unidad interna. les mando un abrazo fraterno a todos los trabajadores universitarios.</p>
			<a class="icon-bullhorn"></a>
			<a class="icon-quill"></a>
	</section>
	<!-- <aside> </aside>-->
<?php
	include "footer.php";
?>