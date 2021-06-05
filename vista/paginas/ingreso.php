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
             <form method="post">

               <div class="form-group m-2">
                 <label for="usuario">Usuario:<span class="simbolo">*</span> </label>
                 <input type="text" class="form-control" id="usuario" name="ingresoUsuario">
               </div>

               <div class="form-group m-2">
                 <label for="">Contraseña:<span class="simbolo">*</span></label>
                 <input type="password" class="form-control" id="pwd" name="ingresoContraseña">
               </div>

               <?php


                $ingreso = new ControladorFormularios();
                $ingreso -> ctrIngreso();

                ?>

               <div class="d-flex justify-content-end">
                 <button type="submit" class="btn-registro btn-primary mt-3"><a href="index.php?pagina=usuarios">Ingresar</a></button>
               </div>

             </form>

           </div>
         </div>
       </div>
     </div>