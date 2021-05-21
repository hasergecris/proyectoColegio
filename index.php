<?php
// aca se muestran las salidas delas vistas al usuario y tambien distintas acciones
// que el usuarioenvie al controlador

 require_once "controladores/plantilla.controlador.php";
 require_once "controladores/formularios.controlador.php";


 $plantilla = new ControladorPlantilla();
 $plantilla -> ctrTraerPlantilla();