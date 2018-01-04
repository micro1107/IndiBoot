<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>INDICO Lab</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
</head>
<script >
	    function validar() {

            var txtNombre, txtEmail, txtAsunto, txtMensaje;

            txtNombre = document.contacto.txtNombre.value;
            txtEmail = document.contacto.txtEmail.value;
            txtAsunto = document.contacto.txtAsunto.value;
            txtMensaje = document.contacto.txtMensaje.value;


            if (document.contacto.txtNombre.value=="" || document.contacto.txtNombre.value==null){
                alert("Error: No olvide escribir su nombre");
                document.usuario_grabar.txtNombre.focus();
                return;
            }
                else if (!isNaN(txtNombre)){
                    alert("Error: Debe escribir un nombre válido");
                    document.contacto.txtNombre.focus();
                    return;
                }

            else if (document.contacto.txtEmail.value=="" || document.contacto.txtEmail.value==null){
                alert("Error: No olvide escribir su email, este será nuestro medio para contactarnos con usted");
                document.contacto.txtEmail.focus();
                return;
            }
            	else if(!email(txtEmail)){
                alert("Error: Debe digitar un email válido");
                document.contacto.txtEmail.focus();
                return;
            	}

            else if (txtAsunto=="" || txtAsunto==null){
                alert("Error: No olvide escribir un asunto");
                document.contacto.txtAsunto.focus();
                return;
            }
                else if (!isNaN(txtAsunto)){
                    alert("Error: Debe escribir un asunto válido");
                    document.contacto.txtAsunto.focus();
                    return;
                }


            else if (txtMensaje=="" || txtMensaje==null){
                alert("Error: No olvide escribir un mensaje");
                document.contacto.txtMensaje.focus();
                return;
            }
            	else if (!isNaN(txtMensaje)){
                    alert("Error: Debe escribir un mensaje válido");
                    document.contacto.txtMensaje.focus();
                    return;
                }
            
		    else {
		    document.contacto.submit();
		    }
		}

        function email(txtEmail){
            if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(txtEmail)){
              return true;
              } 
              else {
               return false;
              }
            }
        
</script>
<body>

<h1>Indico Lab</h1>
<header>	
	<div class="logotipo container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-4 col-md-4">
				
			</div>
			<div class="col-xs-8 col-sm-4 col-md-4">
				<img src="img/logo-menu4.png" alt="Logo-Indico" class="img-responsive center-block">
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
					<li><a href="contacto.php" class="navbar-brand">¿HABLAMOS?</a></li>
				</ul>
			</nav>
		</div>
</header>
	<section class="container-fluid">
		<div class="row formulario">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<form name="contacto" action="enviar.php" method="post">
					<div class="form-group">
	                    Nombre 
	                    <input name= "txtNombre" type= "text" class="form-control">
					</div>

					<div class="form-group">
	                    Tu correo electrónico 
	                    <input name= "txtEmail" type= "text" class="form-control">
	              	</div>

	              	<div class="form-group">
	                    Asunto 
	                    <input name= "txtAsunto" type= "text" class="form-control">
	               </div>

	               <div class="form-group">
	                    Mensaje 
	                    <textarea name="txtMensaje" class="form-control"></textarea> 
	                </div>
	              	<!--
	              	<div class="form-group">
	              		<div class="g-recaptcha" data-sitekey="6LdwvSgUAAAAAHn-SWRsypXDZwJHGsf3IBeNgW5T"></div>
	              	</div>
	              	-->

                    <input class="form-control btn-primary" name="btnEnviar" type="button" value="Enviar" onclick="javascript:validar();">
                	
				</form>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		<div class="row espacioContacto">
			
		</div>
	</section>

<footer>
		
	<p class="company">INDICO LAB S.A.S</p>
	<p class="city">CALI - COLOMBIA</p>
		<div class="redes">
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div><br>
		<div class="copy">
		<p class="city">© 2018 Julian Ibarra</p>
		</div>
</footer>




<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/menu.js"></script>
</body>
</html>
