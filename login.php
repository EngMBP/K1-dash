<!DOCTYPE html>
<?php 
error_reporting(E_ALL); ini_set('display_errors', 1);
//starting the session
session_start();
?>
<html lang="es">
<head>
<title>IOT VFT</title>

<link rel="apple-touch-icon" href="img/icon-72x72.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-96x96.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-128x128.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-144x144.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-152x152.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-192x192.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-384x384.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-512x512.png?80172489134" />
<meta name="apple-mobile-web-app-status-bar" content="#000000" />
<link rel="manifest" href="manifest.json?rnd=147">
<meta name="theme-color" content="#000000" />
<meta property="og:title" content="Vector Fields Technologies"/>
<meta property="og:image" content="images/favicon.png"/>
<meta property="og:site_name" content="Vector Fields Technologies"/>
<meta property="og:url" content="index.php"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Consultoría, dise&ntilde;o y fabricaci&oacute;n a medida de: Maquinaria, circuitos electr&oacute;nicos, simulaciones, software y aplicaciones WEB.">


<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
<script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
<script src="js/gauge.min.js"></script>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://vectorft.com" target="_blank">VECTORFT</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Registre su usuario</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting to Login Page -->
		<a href="index.php">Ya posee cuenta? Inicio Sesion...</a>
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- Registration Form start -->
			<form method="POST" action="save_member.php">	
				<div class="alert alert-info">Registro</div>
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" name="firstname" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Apellido</label>
					<input type="text" name="lastname" class="form-control" required="required"/>
				</div>
				<?php
					//checking if the session 'success' is set. Success session is the message that the credetials are successfully saved.
					if(ISSET($_SESSION['success'])){
				?>
				<!-- Display registration success message -->
				<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
				<?php
					//Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
					}
				?>
				<button class="btn btn-primary btn-block" name="register"><span class="glyphicon glyphicon-save"></span>Registro</button>
			</form>	
			<!-- Registration Form end -->
		</div>
	</div>
</body>
</html>
