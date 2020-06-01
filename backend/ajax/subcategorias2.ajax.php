<?php

require_once "../controladores/subcategorias.controlador2.php";
require_once "../modelos/subcategorias.modelo2.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";


class AjaxSubCategorias2{

	/*=============================================
  	ACTIVAR SUBCATEGORIA
 	=============================================*/

	public $activarSubCategoria2;
	public $activarId;

	public function ajaxActivarSubCategoria2(){

		$tabla = "subcategorias2";

		$item1 = "estado";
		$valor1 = $this->activarSubCategoria2;

		$item2 = "id";
		$valor2 = $this->activarId;

		ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, "id_subcategoria2", $valor2);

		$respuesta = ModeloSubCategorias2::mdlActualizarSubCategorias2($tabla, $item1, $valor1, $item2, $valor2);

		echo $respuesta;

	}

	/*=============================================
	VALIDAR NO REPETIR SUBCATEGORÍA
	=============================================*/

	public $validarSubCategoria2;

	public function ajaxValidarSubCategoria2(){

		$item = "subcategoria2";
		$valor = $this->validarSubCategoria2;

		$respuesta = ControladorSubCategorias2::ctrMostrarSubCategorias2($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	EDITAR SUBCATEGORIA
	=============================================*/

	public $idSubCategoria2;

	public function ajaxEditarSubCategoria2(){

		$item = "id";
		$valor = $this->idSubCategoria2;

		$respuesta = ControladorSubCategorias2::ctrMostrarSubCategorias2($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	TRAER SUBCATEGORIAS DE ACUERDO A LA CATEGORÍA
	=============================================*/

	public $idCategoria2;

	public function ajaxTraerSubCategoria2(){

		$item = "id_categoria2";
		$valor = $this->idCategoria2;

		$respuesta = ControladorSubCategorias2::ctrMostrarSubCategorias2($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
ACTIVAR SUBCATEGORIA
=============================================*/

if(isset($_POST["activarSubCategoria2"])){

	$activarSubCategoria2 = new AjaxSubCategorias2();
	$activarSubCategoria2 -> activarSubCategoria2 = $_POST["activarSubCategoria2"];
	$activarSubCategoria2 -> activarId = $_POST["activarId"];
	$activarSubCategoria2 -> ajaxActivarSubCategoria2();

}

/*=============================================
VALIDAR NO REPETIR SUBCATEGORÍA
=============================================*/

if(isset( $_POST["validarSubCategoria2"])){

	$valSubCategoria2 = new AjaxSubCategorias2();
	$valSubCategoria2 -> validarSubCategoria2 = $_POST["validarSubCategoria2"];
	$valSubCategoria2 -> ajaxValidarSubCategoria2();

}

/*=============================================
EDITAR SUBCATEGORIA
=============================================*/
if(isset($_POST["idSubCategoria2"])){

	$editarSubCategoria2 = new AjaxSubCategorias2();
	$editarSubCategoria2 -> idSubCategoria2 = $_POST["idSubCategoria2"];
	$editarSubCategoria2 -> ajaxEditarSubCategoria2();

}

/*=============================================
TRAER SUBCATEGORIAS DE ACUERDO A LA CATEGORÍA
=============================================*/
if(isset($_POST["idSubcategoria"])){

	$traerSubCategoria2 = new AjaxSubCategorias2();
	$traerSubCategoria2 -> idCategoria2 = $_POST["idSubcategoria"];
	$traerSubCategoria2 -> ajaxTraerSubCategoria2();

}