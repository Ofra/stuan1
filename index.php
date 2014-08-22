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

				$result = mysqli_query($con,"SELECT Id_album,Titulo_album,Descrip_corta FROM Album WHERE Principal='1'");
				while ($rs = mysqli_fetch_array($result)) {
					$album_actual = $rs['Id_album'];
					$titulo = $rs['Titulo_album'];
					$corta = $rs['Descrip_corta'];
				}


				$result1 = mysqli_query($con,"SELECT * FROM Imagen WHERE Id_Album='$album_actual'");
				$result2 = mysqli_query($con,"SELECT * FROM Imagen WHERE Id_Album='$album_actual'");
				$result3 = mysqli_query($con,"SELECT * FROM Album ORDER BY Fecha DESC");
			?>
			<section id="secretario_gral">
				<p class="titulo1">Mensaje del secretario general Roberto González</p>
				<figure><a href="mensaje-gral.php"><img src="images/sec_gral.jpg" /></a></figure>
				<p>Este es el primer número de la gaceta oficial de nuestro sindicato, el sindicato de trabajadores de la universidad autónoma de Nayarit. Aprovecho la oportunidad para dirigirme a la comunidad universitaria y al pueblo de Nayarit para decirles que el STUAN es una organización de trabajadores universitarios, académicos, manuales y administrativos, cuyo propósito fundamental es la defensa de los derechos laborales y  contribuir al desarrollo de nuestro espacio de trabajo que es la universidad autónoma de Nayarit. <a href="mensaje-gral.php">Leer más...</a></p>
			</section>
			<section id="galeria1">
				
				<div id="contenido_galeria">
					<?php
						$im = "imagen";
						$cont=1;
						while ($rs1 = mysqli_fetch_array($result1)){
					?>
					<div id="<?php echo $im.$cont; ?>">
					    <img src="<?php echo $rs1['nombre'];?>" alt="" />
					    <p class="titulo"> <?php echo $titulo; ?></p>
					    <p> <?php echo $corta; ?> <a href="album.php?id=<?php echo $album_actual; ?>">Leer más...</a></p>
					    
					</div>
					<?php
						$cont +=1;
						}
					?>
					
				</div><!-- fin div contenido-galeria -->
				<div id="gale_seg">
					<div class="jMyCarousel">
						<a class="angle-double-left"></a>
						<a class="angle-double-right"></a>
					    <ul>
					    	<?php
								$im1 = "imagen";
								$cont1=1;
								while ($rs2 = mysqli_fetch_array($result2)){
							?>
					        <li><a href="<?php echo '#'.$im1.$cont1; ?>" title=""><img src="<?php echo $rs2['nombre'];?>" alt="" style="width:70px; height:55px;"/></a></li>
					        <?php
					        	$cont1+=1;
								}
							?>
					    </ul>
					</div><!-- Fin div jMyCarousel -->
				</div>	
			</section>

			<section id="container2">
				<h2>Galeria Fotográfica</h2>
					<p><script>
						var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
						var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
						var f=new Date();
						document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
					</script></p>

				<section id="galeria2">

					<ul class="hoverbox">

						<?php
							while ($rs3 = mysqli_fetch_array($result3)) {
						?>
						<li>
							<a href="album.php?id=<?php echo $rs3['Id_album']; ?>"><img src="<?php echo $rs3['Foto_portada']; ?>" alt="description" title="Ver más..."/></a>
						</li>
						<?php
							}
						?>
					</ul>
				</section>	
				<h3 id="trinchera">Trinchera Universitaria</h3>
				<div id="iframes">

					<iframe id="trinchera1"src="http://trincherauniversitaria.blogspot.mx/" id="ifr1" name="SubHtml"
						 scrolling="auto" frameborder="1" AllowTransparency="true">!!Este modulo No es soportado por "este" navegador!!
					</iframe>	
				</div>

				<aside>
					<div class="sitios_div">
					<h3>Sitios de Interes</h3>	
					<h4>Sindicatos Nacionales</h4>
					<ul>
						<li><a href="http://www.stunam.org.mx/">Sindicato de Trabajadores de la Universidad Autónoma de México (STUNAM)</a></li>
						<li><a href="http://www.sutudeg.org.mx/">Sindicato Único de Trabajadores de la Universidad de Guadalajára</a></li>
						<li><a href="http://www.staudg.mx/">Sindicato de Trabajadores Académicos de la Universidad de Guadalajára</a></li>
						<li><a href="http://www.sutuc.org.mx/">Sindicato Único de Trabajadores de la Universidad de Colima</a></li>
						<li><a href="http://suntuasacademicos.org.mx/">Sindicato Único de Trabajadores de la Universidad Autónoma de Sinaloa</a></li>
						<li><a href="http://www.uan.edu.mx">Universidad Autónoma de Nayarit</a></li>
						<li><a href="http://www.contua.org/contenidos.php?id=27">CONTUA </a></li>	
					</ul>	
				</div>
				<div class="sitios_div">
					<h4>Legislación</h4>
					<ul>
						<li><a href="http://info4.unam.mx/ijure/fed/9/2.htm?s=">Constitucion Politica De Los Estados Unidos Mexicanos</a></li>
						<li><a href="http://www.ordenjuridico.gob.mx/constitucion.php">Orden Jurídico</a></li>
						<li><a href="http://www.congresonayarit.mx/">Constitución Política del Estado de Nayarit</a></li>
						<li><a href="http://www.canaldelcongreso.gob.mx/nueva_imagen/home.php">Canal del Congreso </a></li>
					</ul>	
				</div>
				<div class="sitios_div">
					<h4>Revistas</h4>
					<ul>
						<li><a href="http://www.proceso.com.mx/">Revista Proceso</a></li>
						<li><a href="http://www.nexos.com.mx/">Revista Nexos</a></li>
						<li><a href="http://www.metapolitica.com.mx/">Revista Meta política</a></li>
					</ul>	
				</div>
				<div class="sitios_div">
					<h4>Periódicos Nacionales</h4>
					<ul>
						<li><a href="http://www.excelsior.com.mx/">Periódico Excelsior</a></li>
						<li><a href="http://www.eluniversal.com.mx/noticias.html">Periódico El Universal</a></li>
						<li><a href="http://kiosko.net/mx/np/mx_jornada.html">La Jornada</a></li>
						<li><a href="http://www.oem.com.mx/elsoldemexico/">El Sol de México</a></li>
						<li><a href="http://www.diariodemexico.com.mx/noticias/">Diario de México</a></li>
						<li><a href="http://www.elfinanciero.com.mx/">El Financiero</a></li>
					</ul>	
				</div>
				<div class="sitios_div">
					<h4>Revistas Cientificas</h4>
					<ul>
						<li><a href="http://www.cenid.org.mx">Centro de Estudios e Investigación para el Desarrollo Docente A.C. Registro RENIECYT No 2011/14658 a cargo CONACYT</a></li>
						<li><a href="http://www.revistas.unam.mx/">Portada de Revista científica y arbitradas de la UNAM</a></li>
						<li><a href="http://bibvirtual.ujed.mx/Revistas-e.html">Revistas Electrónicas en Bases de Datos de Acceso Gratuito</a></li>
						<li><a href="http://noticias.universia.net.mx/tag/stuanl/">Universia </a></li>
					</ul>	
				</div>
				<div class="sitios_div">
					<h4>Diarios Locales</h4>
					<ul>
						<li><a href="http://www.periodicoavance.com">Avance</a></li>
						<li><a href="http://www.censura.com.mx">Censúra</a></li>
						<li><a href="http://www.diariocritica.com">Crítica</a></li>
						<li><a href="http://meridiano.nayaritpuntocom.com/index.php?from=">Gráfico</a></li>
						<li><a href="http://www.meridiano.com.mx">Meridiano - meridianonayarit@yahoo.com.mx</a></li>
						<li><a href="http://www.periodicorealidades.com">Realidades - rojif@periodicorealidades.com, publicidad@periodicorealidades.com</a></li>
						<li><a href="http://www.periodicoexpress.com.mx">Express</a></li>
						<li><a href="http://www.enfoqueinformativo.com">Enfóque</a></li>
						<li><a href="http://www.diariobuendia.com">Buendia</a></li>
						<li><a href="http://www.eltiempodenayarit.com">El Tiempo de Nayarit</a></li>
						<li><a href="">El Financiero S.A. de C.V.</a></li>
						<li><a href="http://www.genteypoder.org/">Gente y Poder</a></li>
						<li><a href="http://www.elsoldenayarit.com">El Sol de Nayarit</a></li>
						<li><a href="http://www.cronicaurbana.net">Crónica Urbana</a></li>
						<li><a href="http://www.radioaztlan.com.mx/">RTN,Radio Aztlan, Express</a></li>
					</ul>	
				</div>
				</aside>
				
			</section>

		
		<?php
			include "footer.php";
		?>


