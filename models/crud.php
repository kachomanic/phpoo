<?php

require_once "conexion.php";

class Datos extends Conexion{

  //Registro de usuarios
  public function registroUsuarioModel($datosModel, $tabla){

	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES (:usuario,:password,:email)");
	
	$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR); 
	$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);		
 	$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

	if($stmt->execute()){

	    return "success";	

	}

	else{

	    return "error";

	}
	
  }

  //Ingreso de usuario

  public function ingresoUsuarioModel($datosModel, $tabla){
	$stmt = Conexion::conectar()->prepare("SELECT usuario, password FROM $tabla WHERE usuario = :usuario");
	$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
	$stmt->execute();
	//fetch obtain one row
	return $stmt->fetch();

  }

  public function vistaUsuariosModel($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla");
        $stmt->execute();
	//fetchAll obtain all rows
        return $stmt->fetchAll();

  }

}

?>
