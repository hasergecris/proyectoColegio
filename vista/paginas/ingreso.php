     <div id="intro">
          <img class="w-100" src="img/fondo.png" />
     </div>

        <div id="zonaRegistro">
          <h1 class="text-center">Ingreso de usuarios</h1>
          <p class="text-center">
            Diligencia los campos y disfruta con nosotros
          </p>

          <div class="card">
            <div class="row">
              <div class="col-5" id="zonaImagen">
                <img class="escudo" src="img/escudo.png" alt="" class="img" />
              </div>

              <div class="col-7" id="formularioLogin">
               <form class="p-5 bg-light" method="post">
    <h3 class="text-center p-2">Ingreso de  Usuarios</h3>
        <div class="form-group m-2">
            <label for="usuario">Usuario:</label>
            <div class="input-group m-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
            </div>
            <input type="text" class="form-control" id="usuario" name="ingresoUsuario">
        </div>

        <div class="form-group m-2">
            <label for="">Contraseña:</label>
            <div class="input-group m-auto">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
            </div>
            <input type="password" class="form-control" id="pwd" name="ingresoContraseña">
        </div>

        <?php
   

    $ingreso = new ControladorFormularios();
    $ingreso -> ctrIngreso();

    ?>

        <button type="submit" class="btn btn-primary mt-3">Ingresar</button>

    </form>

              </div>
            </div>
          </div>
        </div>