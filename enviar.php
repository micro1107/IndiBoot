<?php  
$destino = "indicolabsas@gmail.com";
$nombre = $_POST['txtNombre'];
$correo = $_POST['txtEmail'];
$asunto = $_POST['txtAsunto'];
$mensaje = $_POST['txtMensaje'];
$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo. "\nAsunto: ".$asunto."\nMensaje: ".$mensaje;
mail($destino,"Contacto Indico Lab".$asunto,$contenido);
header("Location:confirm.php");

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
