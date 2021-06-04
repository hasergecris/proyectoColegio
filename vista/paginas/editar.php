<?php

if(isset($_GET["id"])) {

    $item = "id";
    $valor = $_GET ["id"];
   
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item,$valor);
}

?>

<div class="d-flex justify-content-center text-center ">

    <form class="p-5 bg-light" method="post">
    <h3 class="text-center p-2">Editar Usuario</h3>
        <div class="form-group m-2">
           
            <div class="input-group m-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["identificacion"];?>" placeholder="Escriba su identificacion" id="identificacion" name="actualizarIdentificacion">
            </div>
        </div>

        <div class="form-group m-2">

           
            <div class="input-group m-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["nombre"];?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
            </div>
        </div>

        <div class="form-group">
           
            <div class="input-group m-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
            </div>
            <input type="text" class="form-control" value="<?php echo $usuario["usuario"];?>" placeholder="escriba su usuario" id="usuario" name="actualizarUsuario">
        </div>

        <div class="form-group m-2">
           
            <div class="input-group m-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="actualizarContraseña">
            <input type="hidden" name="contraseñaActual" value="<?php echo $usuario["clave"];?>">
            <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"];?>">
            
        </div>

        <?php

    
         $actualizar = ControladorFormularios::ctrActualizarRegistro();
           
         if($actualizar == "ok"){

            echo '<script>

            if ( window.history.replaceState ) {
 
             window.history.replaceState(null,null,window.location.href);
 
            }
         </script>';
 
         echo '<div class="alert alert-success mt-3">El ususario ah sido Actualizado</div>';

         '<script>

         setTimeout(function(){
     
            window.location = "index.php?pagina=inicio";
             
         },3000);
         </script>';
      }
    
    
        ?>

        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>

    </form>

</div>