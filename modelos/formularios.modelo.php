<?php

 require_once "conexion.php";

 class ModeloFormulario {

  // ZONA DE REGISTRO

  static public function mdlRegistro($tabla, $datos){

    //stmt = statement oen español declaracion aca se trae la conexion ala base de datos y se prepara la sentencia sql
    
    $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(nombre,apellido,email,pwd) 
                                             VALUES(:nombre,:apellido,:email,:pwd)");
    
    // FUNCION bindparam() vincula una variable de php a un parmetro de sustitucion con nombre o de signo de interrogacion correspondiente de la sentencia SQL que fue usada para preparar la sentencia.

    $stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
    $stmt->bindParam(":apellido",$datos["apellido"],PDO::PARAM_STR);
    $stmt->bindParam(":email",$datos["email"],PDO::PARAM_STR);
    $stmt->bindParam(":pwd",$datos["pwd"],PDO::PARAM_STR);


    if ($stmt->execute()) {
      
      return "ok";
    
    }else {
      print_r(Conexion::conectar()->errorInfo());
    }

    // con esta parte si el objeto  llegase a salir con error la concexion no queda abierta con el siguiente codigo se cierra.

    $stmt->close();

    // y con este se que da nulo o borra os datos

    $stmt->null;



  }
 }

 ?>