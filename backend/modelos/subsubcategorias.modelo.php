<?php

require_once "conexion.php";

class ModeloSubsubcategorias{

	/*=============================================
	ACTUALIZAR SUBCATEGORIAS
	=============================================*/

	static public function mdlActualizarSubsubcategorias($tabla, $item1, $valor1, $item2, $valor2){

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
	ACTUALIZAR OFERTA SUBCATEGORIAS
	=============================================
	static public function mdlActualizarOfertaSubsubcategorias($tabla, $datos, $ofertadoPor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $ofertadoPor = :$ofertadoPor, oferta = :oferta, precioOferta = :precioOferta, descuentoOferta = :descuentoOferta, imgOferta = :imgOferta, finOferta = :finOferta WHERE id_categoria = :id_categoria");

		$stmt->bindParam(":".$ofertadoPor, $datos["oferta"], PDO::PARAM_STR);
		$stmt->bindParam(":oferta", $datos["oferta"], PDO::PARAM_STR);
		$stmt->bindParam(":precioOferta", $datos["precioOferta"], PDO::PARAM_STR);
		$stmt->bindParam(":descuentoOferta", $datos["descuentoOferta"], PDO::PARAM_STR);
		$stmt->bindParam(":imgOferta", $datos["imgOferta"], PDO::PARAM_STR);
		$stmt->bindParam(":finOferta", $datos["finOferta"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_categoria", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();
		$stmt = null;


	}

	/*=============================================
	MOSTRAR SUBCATEGORIAS
	=============================================*/

	static public function mdlMostrarSubsubcategorias($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	CREAR SUBCATEGORIA
	=============================================*/

	static public function mdlIngresarSubsubcategoria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(subsubcategoria, id_subcategoria, ruta, estado) VALUES (:subsubcategoria, :id_subcategoria, :ruta, :estado)");

		$stmt->bindParam(":subsubcategoria", $datos["subsubcategoria"], PDO::PARAM_STR);
		$stmt->bindParam(":id_subcategoria", $datos["idsubcategoria"], PDO::PARAM_STR);
		$stmt->bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR SUBCATEGORIA
	=============================================*/

	static public function mdlEditarSubsubcategoria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET subsubcategoria = :subsubcategoria, id_subcategoria = :id_subcategoria, ruta = :ruta, estado = :estado WHERE id = :id");

		$stmt->bindParam(":subsubcategoria", $datos["subsubcategoria"], PDO::PARAM_STR);
		$stmt->bindParam(":id_subcategoria", $datos["idsubcategoria"], PDO::PARAM_STR);
		$stmt->bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR SUBCATEGORIA
	=============================================*/

	static public function mdlEliminarSubsubcategoria($tabla, $datos){

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