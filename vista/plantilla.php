<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome-5.10.1/css/all.min.css">
        <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
	<div class="container-fluid">
		 <header>
          <nav class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
              <h3 class="navbar-brand">Colegio N.S de la Alegria</h3>
              <div class="nav justify-content-end py-2 nav-pills">

         <?php if(isset($_GET["pagina"])):?> 
                
              
              <?php if ($_GET["pagina"]== "registro"):?>
                    <a class="nav-link active" href="index.php?pagina=registro">Registrarse</a>
                <?php else:?>
                    <a class="nav-link" href="index.php?pagina=registro">Registrarse</a>
                <?php endif?>
                    
                <?php if ($_GET["pagina"]== "ingreso"):?>
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingresar</a>
                <?php else:?>
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingresar</a>
                <?php endif?>
                     
                <?php if ($_GET["pagina"]== "inicio"):?>
                    <a class="nav-link active" href="index.php?pagina=inicio">inicio</a>
                <?php else:?>
                    <a class="nav-link" href="index.php?pagina=inicio">inicio</a>
                <?php endif?>
                    
                <?php if ($_GET["pagina"]== "salir"):?>
                      <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                <?php else:?>
                      <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                <?php endif?>

                <?php else:?>
              <a class="nav-link active" href="index.php?pagina=registro">Registrarse</a>
              <a class="nav-link" href="index.php?pagina=ingreso">Ingresar</a>
              <a class="nav-link" href="index.php?pagina=inicio">inicio</a>                    
              <a class="nav-link" href="index.php?pagina=salir">Salir</a>

              <?php endif?>
                    


             

                
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
            
            }else {
                
              include "paginas/error404.php";

               }
            

          }else {

            include "paginas/registro.php";

          }


          ?>
  </div>
  <footer class="footer">
    <div class="row p-3">
      <div class="col-sm-12 col-md-6">
        <h3 class="navbar-brand">nombre de la apli</h3>
        <p>Es una plataforma para que los instituciones educativas puedan generar y crear datos de una forma  segura y confiable.</p>
      </div>
      <div class="col-sm-12 col-md-3">
        <a href="#" class="enlaces">Acerca del colegio</a>
        <a href="#" class="enlaces">ingresar</a>
        <a href="#" class="enlaces">registrar</a>
        <a href="#" class="enlaces">inicio</a>
      </div>
  
      <div class="col-3 footer-iconos">
        <p>Contáctenos</p>
        <a href="#" class="text-center">col.nuestrasradelaalegria.edu@gmail.com</a>
  
        <div class="row iconos">
          <div class="col-auto">
            <i class="fab fa-facebook-f"></i>
          </div>
          <div class="col-auto">
            <i class="fab fa-instagram"></i>
          </div>
          <div class="col-auto">
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 final">
        <p>Educamos en la libertad la fe y el amor</p>
        <p>2021</p>
      </div>
    </div>
  </footer>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>