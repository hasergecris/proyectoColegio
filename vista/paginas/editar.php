<?php

if (isset($_GET["id"])) {

    $item = "id";
    $valor = $_GET["id"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}

?>

<div id="intro">
    <img class="w-100" src="img/fondo.png" />
</div>

<div id="zonaEditar">

    <h1 class="text-center">Editar Usuarios</h1>
    <p class="text-center">Diligencia los campos y actualiza tu Usuario.</p>


    <div class="card">
        <div class="row">
            <div class="col-5" id="zonaImagen">
                <img class="escudo" src="img/escudo.png" alt="" class="img">
            </div>




            <div class="col-7 " id="formularioEditar">
                <form method="post">

                    <div class="form-group m-2">
                        <label for="id">identificacion: <span class="simbolo">*</span> </label>
                        <input type="text" class="form-control" value="<?php echo $usuario["identificacion"]; ?>" id="identificacion" name="actualizarIdentificacion">
                    </div>

                    <div class="form-group m-2">
                        <label for="id">Nombre Completo: <span class="simbolo">*</span> </label>
                        <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
                    </div>

                    <div class="form-group">
                        <label for="id">Usuario: <span class="simbolo">*</span> </label>
                        <input type="text" class="form-control" value="<?php echo $usuario["usuario"]; ?>" placeholder="escriba su usuario" id="usuario" name="actualizarUsuario">
                    </div>


                    <div class="form-group m-2">
                        <label for="id">Contraseña: <span class="simbolo">*</span> </label>
                        <input type="text" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="actualizarContraseña">
                        <input type="hidden" name="contraseñaActual" value="<?php echo $usuario["clave"]; ?>">
                        <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">
                    </div>

                    <?php


                    $actualizar = ControladorFormularios::ctrActualizarRegistro();

                    if ($actualizar == "ok") {

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

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn-registro btn-primary mt-3">Editar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>