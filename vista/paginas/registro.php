<div id="intro">
  <img class="w-100" src="img/fondo.png" />
</div>

<div id="zonaRegistro">
  <h1 class="text-center">Regístrate</h1>
  <p class="text-center">Diligencia los campos y crea tu Usuario</p>

  <div class="card">
    <div class="row">
      <div class="col-5" id="zonaImagen">
        <img class="escudo" src="img/escudo.png" alt="" class="img">
      </div>

      <div class="col-7" id="formularioRegistro">

        <form method="post">
          <h3 class="text-center">Registrar Usuario</h3>
          <div class="form-group">
            <label for="id">identificacion: <span class="simbolo">*</span> </label>
            <input type="text" class="form-control" id="identificacion" name="registroIdentificacion">
          </div>

          <div class="form-group m-2">
            <label for="nombre">Nombre Completo:<span class="simbolo">*</span> </label>
            <input type="text" class="form-control" id="nombre" name="registroNombre">
          </div>

          <div class="form-group m-2">
            <label for="usuario">Usuario:<span class="simbolo">*</span> </label>
            <input type="text" class="form-control" id="usuario" name="registroUsuario">
          </div>

          <div class="form-group m-2">
            <label for="">Contraseña:<span class="simbolo">*</span> </label>
            <input type="text" class="form-control" id="pwd" name="registroContraseña">
          </div>

          <?php

          // metodo no estatico

          //$registro = new ControladorFormularios();
          //$registro ->ctrRegistro();

          // metodo estatico

          $registro = ControladorFormularios::ctrRegistro();

          if ($registro == "ok") {

            // para borrar la cache o datos para limpiar las variables post
            echo '<script>

           if ( window.history.replaceState ) {

            window.history.replaceState(null,null,window.location.href);

           }
        </script>';

            echo '<div class="alert alert-success mt-3">El ususario ah sido registrado</div>';
          }

          ?>

          <div class="d-flex justify-content-end">
            <button type="submit" class="btn-registro btn-primary mt-3">Registrar</button>
          </div>
        </form>

      </div>
    </div>
  </div>

</div>