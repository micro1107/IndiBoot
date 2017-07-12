<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Indico Lab</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body class="primero">

<header>	
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed menu" data-toggle="collapse" data-target="#nav-i">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#"><img src="img/logo.png"  alt="Logo-menu" class="img-responsive" width="200px"></a>
				
			</div>

				<div class="collapse navbar-collapse navbar-right" id="nav-i">
					<ul class="nav navbar-nav ">
						<li><a href="#" class="navbar-brand">¿QUIÉNES SOMOS?</a></li>
						<li><a href="#" class="navbar-brand">¿QUÉ HACEMOS?</a></li>
						<li><a href="#" class="navbar-brand">EQUIPO</a></li>
						<li><a href="#" class="navbar-brand">NUESTRO TRABAJO</a></li>
						<li><a href="#" class="navbar-brand">CONTACTO</a></li>
					</ul>
				</div>
		</div>
	</nav>
</header>
	
	<?php  
		if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]) {
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