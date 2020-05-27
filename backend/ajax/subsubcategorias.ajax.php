<?php

require_once "../controladores/subsubcategorias.controlador.php";
require_once "../modelos/subsubcategorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class AjaxSubSubCategorias{

	/*=============================================
  	ACTIVAR SUB-SUBCATEGORIA
 	=============================================*/

	public $activarSubSubCategoria;
	public $activarId;

	public function ajaxActivarSubSubCategoria(){

		$tabla = "subsubcategorias";

		$item1 = "estado";
		$valor1 = $this->activarSubSubCategoria;

		$item2 = "id";
		$valor2 = $this->activarId;

		ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, "id_subsubcategoria", $valor2);

		$respuesta = ModeloSubSubCategorias::mdlActualizarSubSubCategorias($tabla, $item1, $valor1, $item2, $valor2);

		echo $respuesta;

	}

	/*=============================================
	VALIDAR NO REPETIR SUB-SUBCATEGORÍA
	=============================================*/

	public $validarSubSubCategoria;

	public function ajaxValidarSubSubCategoria(){

		$item = "subsubcategoria";
		$valor = $this->validarSubCategoria;

		$respuesta = ControladorSubSubCategorias::ctrMostrarSubSubCategorias($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	EDITAR SUB-SUBCATEGORIA
	=============================================*/

	public $idSubSubCategoria;

	public function ajaxEditarSubSubCategoria(){

		$item = "id";
		$valor = $this->idSubSubCategoria;

		$respuesta = ControladorSubSubCategorias::ctrMostrarSubSubCategorias($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	TRAER SUB-SUBCATEGORIAS DE ACUERDO A LA SUBCATEGORÍA
	=============================================*/

	public $idSubCategoria;

	public function ajaxTraerSubSubCategoria(){

		$item = "id_subcategoria";
		$valor = $this->idSubCategoria;

		$respuesta = ControladorSubSubCategorias::ctrMostrarSubSubCategorias($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
ACTIVAR SUB-SUBCATEGORIA
=============================================*/

if(isset($_POST["activarSubSubSubCategoria"])){

	$activarSubSubCategoria = new AjaxSubSubCategorias();
	$activarSubSubCategoria -> activarSubSubCategoria = $_POST["activarSubSubCategoria"];
	$activarSubSubCategoria -> activarId = $_POST["activarId"];
	$activarSubSubCategoria -> ajaxActivarSubSubCategoria();

}

/*=============================================
VALIDAR NO REPETIR SUB-SUBCATEGORÍA
=============================================*/

if(isset( $_POST["validarSubSubCategoria"])){

	$valSubSubCategoria = new AjaxSubSubCategorias();
	$valSubSubCategoria -> validarSubSubCategoria = $_POST["validarSubSubCategoria"];
	$valSubSubCategoria -> ajaxValidarSubSubCategoria();

}

/*=============================================
EDITAR SUB-SUBCATEGORIA
=============================================*/
if(isset($_POST["idSubSubCategoria"])){

	$editarSubSubCategoria = new AjaxSubSubCategorias();
	$editarSubSubCategoria -> idSubSubCategoria = $_POST["idSubSubCategoria"];
	$editarSubSubCategoria -> ajaxEditarSubSubCategoria();

}

/*=============================================
TRAER SUB-SUBCATEGORIAS DE ACUERDO A LA SUBCATEGORÍA
=============================================*/
if(isset($_POST["idSubCategoria"])){

	$traerSubSubCategoria = new AjaxSubSubCategorias();
	$traerSubSubCategoria -> idSubCategoria = $_POST["idSubCategoria"];
	$traerSubSubCategoria -> ajaxTraerSubSubCategoria();

}