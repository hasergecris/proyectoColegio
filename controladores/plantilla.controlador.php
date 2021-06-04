<?php

Class ControladorPlantilla {

  // llamar ala plantilla "ctr" archivos que se encuentran en la carpeta controlador
   public function ctrTraerPlantilla(){

    // el include se utiliza para nvocar archivos que contiene codigo html o php.
    include "vista/plantilla.php";
   
  }


}

?>