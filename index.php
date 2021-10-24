<!DOCTYPE html>
<?php 
session_start();
if (isset($_SESSION['loggedin'])){
header('Location: dash/home.php');
exit;
}
?>
<html lang="es">
<head>
<title>IOT VFT hola master</title>

<link rel="apple-touch-icon" href="img/icon-72x72.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-96x96.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-128x128.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-144x144.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-152x152.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-192x192.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-384x384.png?80172489134" />
<link rel="apple-touch-icon" href="img/icon-512x512.png?80172489134" />
<meta name="apple-mobile-web-app-status-bar" content="#000000" />
<link rel="manifest" href="manifest.json?v=150">
<meta name="theme-color" content="#000000" />
<meta name="description" content="Consultoría, dise&ntilde;o y fabricaci&oacute;n a medida de: Maquinaria, circuitos electr&oacute;nicos, simulaciones, software y aplicaciones WEB." />
<meta property="og:title" content="Vector Fields Technologies"/>
<meta property="og:image" content="images/favicon.png"/>
<meta property="og:site_name" content="Vector Fields Technologies"/>
<meta property="og:url" content="index.php"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Consultoría, dise&ntilde;o y fabricaci&oacute;n a medida de: Maquinaria, circuitos electr&oacute;nicos, simulaciones, software y aplicaciones WEB.">


<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="css/stylelogin.css">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">

</head>





<body>

<div class="page">
  <div class="container">
    <div class="left">
      <div class="login"><img alt="Logo" src="img/favicon.ico" style="width:50px; height:auto;"> IOT</div>
      <div class="eula">Vector Fields Technologies - Mockup de aplicacion IOT desktop & movil diseñada por VFT</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ffffff;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      
      <form method="POST" action="login_query.php">	
		  
		        <div class="form">
         <label for="Usuario">Usuario</label>
		     <input id="Usuario" type="text" name="username" class="form-control" required="required"/>
         <label for="Contrasenia">Contrasenia</label>
         <input id="Contrasenia" type="password" name="password" class="form-control" required="required"/>
         <label for="Error">
				<?php
					if(ISSET($_SESSION['error'])){
            echo $_SESSION['error'];
				?>
				<?php
					unset($_SESSION['error']);
					}
				?></label>
         <input type="submit" id="submit" name="login" value="Iniciar Sesion"/>
      </div>

			</form>	
      

    </div>
  </div>
  
</div>

<script defer>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('sw.js');
}
</script>

</body>

<script defer src="js/mqttws31.js" type="text/javascript"></script>
<script defer src="js/gauge.min.js"></script>
<script defer type = "text/javascript" src = "js/jquery-3.6.0.min.js"></script>	
</html>
