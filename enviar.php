<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Indico Lab</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fontello.css">
</head>
<body class="primero">

<h1>Indico Lab</h1>
<header>	
	<div class="logotipo container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-4 col-md-4">
				
			</div>
			<div class="col-xs-8 col-sm-4 col-md-4">
				<img src="img/logo-menu2.png" alt="Logo-Indico" class="img-responsive">
			</div>
			<div class="col-xs-2 col-sm-4 col-md-4">
				
			</div>
		</div>
	</div>

	<div class="navegacion">
			<div class="boton-menu">
				<a href="#"><span class="icon icon-menu"></span></a>
			</div>
			<nav>
				<ul class="menu">
					<li><a href="index.html" class="navbar-brand">¿QUIÉNES SOMOS?</a></li>
					<li><a href="que-hacemos.html" class="navbar-brand">¿QUÉ HACEMOS?</a></li>
					<li><a href="equipo.html" class="navbar-brand">EQUIPO</a></li>
					<li><a href="nuestro-trabajo.html" class="navbar-brand">NUESTRO TRABAJO</a></li>
					<li><a href="contacto.php" class="navbar-brand">CONTACTO</a></li>
				</ul>
			</nav>
		</div>
</header>
	
	<div class="container-fluid">
				<section class="main">
					<div class="row">
						<div class="espacioEnviar">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 txtRespuesta">
							<p>
								<?php
									print $_POST["txtNombre"]."<br> El mensaje se ha enviado de manera satisfactoria.<br> Gracias";
								?>
							</p>
						</div>	
					</div>
					<div class="row">
						<div class="espacioEnviar">
							
						</div>
					</div>
				</section>
			</div>
	<?php  
		/*if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]) {
			$secret = "6LdwvSgUAAAAALsWNs9b6vYDDizNGGdtRdk-gKCd";
			$ip = $_SERVER["REMOTE_ADDR"];

			$captcha = $_POST["g-recaptcha-response"];

			$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");

			// Envío de mensaje

			$nombre= $_POST["txtNombre"];
			?>
			<div class="container-fluid">
				<section class="main">
					<div class="row">
						<div class="espacioEnviar">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 txtRespuesta">
							<p>
								<?php
									print $_POST["txtNombre"]."<br> El mensaje se ha enviado de manera satisfactoria.<br> Gracias";
								?>
							</p>
						</div>	
					</div>
					<div class="row">
						<div class="espacioEnviar">
							
						</div>
					</div>
				</section>
			</div>
		<?php
		}
		else {
		?>
				<div class="container-fluid">
					<section class="main">
						<div class="row">
							<div class="espacioEnviar">
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 txtRespuesta">
								<p>
									<?php
										print $_POST["txtNombre"]."<br> El mensaje no pudo enviarse, intenta más tarde";
									?>
								</p>
							</div>	
						</div>
						<div class="row">
							<div class="espacioEnviar">
								
							</div>
						</div>
					</section>
				</div>
		<?php
		}
		*/
	?>


<footer>
		
	<p class="company">INDICO LAB S.A.S</p>
	<p class="city">CALI - COLOMBIA</p>
		<div class="redes">
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/menu.js"></script>
</body>
</html>