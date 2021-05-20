<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Registro Alumnos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-5.10.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
	<div class="container-fluid">
		 <header>
          <nav class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
              <h3 class="navbar-brand">Colegio N.S de la Alegria</h3>
              <div class="nav justify-content-end py-2 nav-pills">
                <a class="nav-link" href="index.php?pagina=registro">Registrarse</a>
                <a class="nav-link" href="index.php?pagina=ingreso">Ingresar</a>
                <a class="nav-link active" href="index.php?pagina=inicio">inicio</a>
                <a class="nav-link" href="index.php?pagina=salir">Salir</a>
              </div>
            </div>
          </nav>
        </header>
	</div>

  
  <div class="container py-5">
          <?php

          if(isset($_GET["pagina"])) {

            if($_GET["pagina"] == "registro" ||
               $_GET["pagina"] == "ingreso"||
               $_GET["pagina"] == "inicio" ||
               $_GET["pagina"] == "salir") {
            
                include "paginas/".$_GET["pagina"].".php";


               }
            

          }else {

            include "paginas/registro.php";

          }


          ?>
  </div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>