<!DOCTYPE html> 
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<!--Autor Oscar Francisco Ramírez Andalón email: ofra.2925@gmail.com-->
		<meta name="author" content="Oscar Francisco Ramírez Andalón">
		<meta name="contact" content="ofra.2925@gmail.com">
		<meta name="description" content='STUAN -(SINDICATO DE TRABAJADORES DE LA UNIVERSIDAD AUTONOMA DE NAYARIT)- "Por un Sindicato para Todos". Roberto Gonzáles Bernal Secretario Genera.' />
		<meta  name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
		<title>STUAN</title>	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/apprise-1.5.min.js"></script>
		<!-- ****Css***	-->
		<!--<link rel="stylesheet" type="text/css" href="css/normalize.css">-->
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Hammersmith+One|Bevan|Black+Ops+One|Abril+Fatface' rel='stylesheet' type='text/css'>	
		<link rel="stylesheet" type="text/css" href="css/galeria.css">
		<link rel="stylesheet" type="text/css" href="css/logeo.css">
		<link rel="stylesheet" type="text/css" href="css/message.css">
		<link rel="stylesheet" type="text/css" href="css/objetivo.css">
		<link rel="stylesheet" type="text/css" href="css/mision.css">
		<link rel="stylesheet" type="text/css" href="css/historia.css">
		<link rel="stylesheet" type="text/css" href="css/comite.css">
		<link rel="stylesheet" type="text/css" href="css/contacto.css">
		<link rel="stylesheet" type="text/css" href="css/ubicacion.css">
		<link rel="stylesheet" type="text/css" href="css/prensa.css">
		<link rel="stylesheet" type="text/css" href="css/agregar_album.css">
		<link rel="stylesheet" type="text/css" href="css/administrar.css">
		<link rel="stylesheet" type="text/css" href="css/modifica_album.css">
		<link rel="stylesheet" type="text/css" href="css/editar.css">
		<link rel="stylesheet" type="text/css" href="css/album.css">
		<link rel="stylesheet" type="text/css" href="css/apprise.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/style1-0.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>

	</head>
	<body>
		<header>
			
			<h1><em>STUAN</em></h1>
			<h3>SINDICATO DE TRABAJADORES<br /> DE LA<br /> UNIVERSIDAD AUTÓNOMA DE NAYARIT</h3>
			<figure id="uan"><img src="images/uan.jpeg"  /></figure>
			<figure>
					<img id ="img_stuan" src="images/stuan.jpg" />
			</figure>
			<nav>
				<h3>"Por un Sindicato Para Todos"</h3>
				<ul class="mi-menu" id="header1_nav">
					<li class="li1"><a href="index.php" class="enlace_menu">Inicio</a></li>
					<li class="li1"><a class="enlace_menu">Quienes somos</a>
						<ul >
						    <li><a href="objetivo.php"  > Objetivos </a></li>
						    <li><a href="mision.php" > Misión y Visión </a></li>
						    <li><a href="historia.php" > Historia </a></li>
				    	</ul>
					</li>
					<li  class="li1" title="DIRECTORIO DEL COMITÉ EJECUTIVO 2012-2016"><a href="comite.php" class="enlace_menu">Secretarías y Comité</a></li>
					<li class="li1"><a href="prensa.php" class="enlace_menu">Prensa y Propaganda</a></li>
					<li class="li1"><a href="contacto.php" class="enlace_menu">Contácto</a></li>
					<li class="li1"><a href="ubicacion.php" class="enlace_menu">Ubicación</a></li>
					
					</li>
				</ul>
				<a class="icon-user" id="loggin_nav" >Login</a>
			</nav>

		</header>

		<section id="container">
			<?php
				include "login.php";
			?>