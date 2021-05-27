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
                <div>
                  <label for="nombre" class="form-label">Nombres <span class="simbolo">*</span></label>
                  <input type="text" class="form-control text-center" id="nombre" name="registroNombre">
                </div>

                <div class="mb-2">
                  <label for="apellido" class="form-label">Apellidos <span class="simbolo">*</span></label>
                  <input type="text" class="form-control" id="apellido" name="registroApellidos">
                </div>

                <div>
                  <label for="correo" class="form-label">Correo Electronico <span class="simbolo">*</span></label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="registroEmail">
                </div>

                <div>
                  <label for="contraseña" class="form-label">Contraseña <span class="simbolo">*</span></label>
                  <input type="password" class="form-control" id="pwd" name="registroPassword">

                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label>Acepto los <a href="#" class="terminos"> Terminos y condiciones </a></label>
                </div>


                <?php

                // FORMA QUE SE INSTANCIA LA CLASE DE  UN METODO NO ESTATICO
                      //  $registro = new ControladorFormularios();
                      //  $registro -> ctrRegistro();


                // FORMA QUE SE INSTANCIA LA CLASE DE  UN METODO ESTATICO

                      $registro = ControladorFormularios::ctrRegistro();

                    if ($registro == "ok") {

                      echo '<script>
                                if (window.history.replaceState) {
                                  window.history.replaceState( null,null, window.location.href);
                                }
                            </script>';

                      echo '<div class="alert alert-success">El docente ah sido registrado con exito </div>';
                    }
                ?>

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn-registro btn-primary"> <a href="login.html">Registrar</a> </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
