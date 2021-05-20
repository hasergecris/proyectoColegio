<?php
// aca se muestran las salidas delas vistas al usuario y tambien distintas acciones
// que el usuarioenvie al controlador

 require_once "controladores/plantilla.controlador.php";

 $plantilla = new ControladorPlantilla();
 $plantilla -> ctrTraerPlantilla();