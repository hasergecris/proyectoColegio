<?php

require_once "conexion.php";

class ModeloFormularios {

// Registro

static public function mdlRegistro($tabla,$datos) {


    $stmt = conexion::conectar()->prepare("INSERT INTO $tabla( identificacion, nombre, usuario, clave) VALUES 
    (:identificacion, :nombre, :usuario, :clave)");

    $stmt->bindParam(":identificacion",$datos["identificacion"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario",$datos["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":clave",$datos["clave"], PDO::PARAM_STR);

    if($stmt->execute()) {
        return "ok";
    }else {
        print_r(Conexion::conectar()->errorInfo());
    }

   
}

static public function mdlSeleccionarRegistros($tabla, $item, $valor) {

    if($item == null && $valor == null) {

    $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM 
    $tabla ORDER BY id DESC");

    $stmt->execute();

    return $stmt -> fetchAll();

}else {

    $stmt = conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM 
    $tabla WHERE $item = :$item ORDER BY id DESC");

    $stmt->bindParam(":".$item ,$valor, PDO::PARAM_STR);


    $stmt->execute();

    return $stmt -> fetch();
}
   
}

//ACTUALIZAR REGUISTRO

static public function mdlActualizarRegistro($tabla,$datos) {

    $stmt = conexion::conectar()->prepare("UPDATE $tabla SET  identificacion=:identificacion,nombre=:nombre,usuario=:usuario,clave=:clave WHERE id =:id ");


    $stmt->bindParam(":identificacion",$datos["identificacion"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario",$datos["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":clave",$datos["clave"], PDO::PARAM_STR);
    $stmt->bindParam(":id",$datos["id"], PDO::PARAM_INT);


    if($stmt->execute()) {
        
        return "ok";
    }else {
        print_r(Conexion::conectar()->errorInfo());
    }

  

}

// ELIMINAR REGISTRO

static public function mdlEliminarRegistro($tabla,$valor) {

    $stmt = conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");


   
    $stmt->bindParam(":id",$valor , PDO::PARAM_INT);


    if($stmt->execute()) {
        
        return "ok";
    }else {
        print_r(Conexion::conectar()->errorInfo());
    }

  

}
}

?>