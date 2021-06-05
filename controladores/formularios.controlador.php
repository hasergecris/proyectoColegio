<?php
    class ControladorFormularios {

        //----------------------------- REGISTRO-------------------------------------------

        static public function ctrRegistro() {

            if(isset($_POST["registroIdentificacion"])) {
               
                $tabla = "usuarios";
           
                $datos = array(
                "identificacion"=>$_POST["registroIdentificacion"],
                "nombre"=>$_POST["registroNombre"],"usuario"=>$_POST["registroUsuario"],
                "clave"=>$_POST["registroContraseña"]);

                $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);

                return $respuesta;
            }

        }

    //-------------------- SELECCIONAR REGISTROS--------------------------
    
        static public function ctrSeleccionarRegistros( $item, $valor) {

            $tabla = "usuarios";

            $respuesta =ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            return $respuesta;
        }
        
    // ---------------------INGRESO O LOGIN----------------------------
    
      public function ctrIngreso() {

        if(isset($_POST["ingresoUsuario"])) {

            $tabla = "usuarios";
            $item = "usuario";
            $valor = $_POST["ingresoUsuario"];
            
            $respuesta =ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if($respuesta["usuario"] == $_POST["ingresoUsuario"] && $respuesta["clave"] == $_POST["ingresoContraseña"]) {

                $_SESSION["validarIngreso"] = "ok";

                echo '<script>

                if ( window.history.replaceState ) {
     
                 window.history.replaceState(null,null,window.location.href);
     
                }

                window.location = "index.php?pagina=inicio";

             </script>';

            }else {

                echo '<script>

                if ( window.history.replaceState ) {
     
                 window.history.replaceState(null,null,window.location.href);
     
                }
             </script>';
     
             echo '<div class="alert alert-danger mt-3">Error al Ingresar, verifique USUARIO Y CONTRASEÑA </div>';
          }
     
     
            }

        }

        //------------------------------ ACTUALIZAR REGISTRO--------------------------------------------

      static  public function ctrActualizarRegistro() {

            if(isset($_POST["actualizarIdentificacion"])) {

                if($_POST["actualizarContraseña"] != "") {

                    $password = $_POST["actualizarContraseña"];

                }else {
                    $password = $_POST["contraseñaActual"];

                }
               
                $tabla = "usuarios";

                $datos = array(
                "id"   =>  $_POST["idUsuario"],    
                "identificacion"=>$_POST["actualizarIdentificacion"],
                "nombre"=>$_POST["actualizarNombre"],
                "usuario"=>$_POST["actualizarUsuario"],
                "clave"=> $password);

                $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla,$datos);
             
                return $respuesta;
              
         
            } 
               
        }

        //--------------------------------- ELIMINAR REGISTROS -------------------------------------------------

        public function ctrEliminarRegistro(){

            if(isset($_POST["eliminarRegistro"])) {

                $tabla = "usuarios";
                $valor = $_POST["eliminarRegistro"];
               
                $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
             
            if ($respuesta == "ok"){

                echo '<script>

                if ( window.history.replaceState ) {
     
                 window.history.replaceState(null,null,window.location.href);
     
                }

                window.location = "index.php?pagina=usuarios";

             </script>';

            }
              
         
            }
            
        }
    }
     
