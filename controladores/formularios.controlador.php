<?php
class ControladorFormularios {

  // METODO REGISTRO

static  public function ctrRegistro() {
    
    if(isset($_POST["registroNombre"])) {

      $tabla = "registros";
      $datos = array("nombre" => $_POST["registroNombre"],
                     "apellido" =>$_POST["registroApellido"],
                     "email" => $_POST["registroEmail"],
                     "pwd" => $_POST["registroPassword"]);

      $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
      return $respuesta;               
    }
  }
}