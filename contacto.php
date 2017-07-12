<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Indico Lab</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
	              	
	              	<div class="form-group">
	              		<div class="g-recaptcha" data-sitekey="6LdwvSgUAAAAAHn-SWRsypXDZwJHGsf3IBeNgW5T"></div>
	              	</div>

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
		</div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/headroom.min.js"></script>
<script src="js/menu.js"></script>
</body>
</html>