<?php
class ControladorFormularios {

  // METODO REGISTRO

static  public function ctrRegistro() {
    
    if(isset($_POST["registroNombre"])) {

      return "ok";
    }
  }
}