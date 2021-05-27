<?php
// aca se muestran las salidas delas vistas al usuario y tambien distintas acciones
// que el usuario envie al controlador
// al requerirlosdesde el index cualquier controlador puede usar los metodos que se encuentren en este modelo o controlador.  

 require_once "controladores/plantilla.controlador.php";
 
 require_once "controladores/formularios.controlador.php";
 require_once "modelos/formularios.modelo.php";

 

 $plantilla = new ControladorPlantilla();
 $plantilla -> ctrTraerPlantilla();