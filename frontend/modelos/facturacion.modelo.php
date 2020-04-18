<?php 
	require_once "conexion.php";

	class ModeloFact{

	/*=============================================
	MOSTRAR FACTURACION
	=============================================*/

	static public function mdlMostrarfact($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt-> close();

		$stmt = null;


	}

	/*=============================================
	ACTUALIZAR FACTURACION
	=============================================*/

	static public function mdlActualizarfact($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE FACTURACION
	=============================================*/
	static public function mdlfact($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombrefiscal, email, rfc, cp, regimenfiscal) VALUES (:nombrefiscal, :email, :rfc, :cp, :regimenfiscal)");

		$stmt->bindParam(":nombrefiscal", $datos["nombrefiscal"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
		$stmt->bindParam(":cp	", $datos["cp	"], PDO::PARAM_STR);
		$stmt->bindParam(":regimenfiscal", $datos["regimenfiscal"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR FACTURACION
	=============================================*/

	static public function mdlEditarfact($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombrefiscal, email, rfc, cp, regimenfiscal) VALUES (:nombrefiscal, :email, :rfc, :cp, :regimenfiscal)");

		$stmt->bindParam(":nombrefiscal", $datos["nombrefiscal"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
		$stmt->bindParam(":cp	", $datos["cp	"], PDO::PARAM_STR);
		$stmt->bindParam(":regimenfiscal", $datos["regimenfiscal"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ELIMINAR FACTURACION
	=============================================*/

	static public function mdlEliminarfact($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}





	}



 ?>