<?php

require_once "../controladores/subsubcategorias.controlador.php";
require_once "../modelos/subsubcategorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class AjaxSubsubcategorias{

	/*=============================================
  	ACTIVAR SUBCATEGORIA
 	=============================================*/

	public $activarSubsubcategoria;
	public $activarId;

	public function ajaxActivarSubsubcategoria(){

		$tabla = "subsubcategorias";

		$item1 = "estado";
		$valor1 = $this->activarSubsubCategoria;

		$item2 = "id";
		$valor2 = $this->activarId;

		ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, "id_subsubcategoria", $valor2);

		$respuesta = ModeloSubsubcategorias::mdlActualizarSubsubcategorias($tabla, $item1, $valor1, $item2, $valor2);

		echo $respuesta;

	}

	/*=============================================
	VALIDAR NO REPETIR SUBCATEGORÍA
	=============================================*/

	public $validarSubsubcategoria;

	public function ajaxValidarSubsubcategoria(){

		$item = "subsubcategoria";
		$valor = $this->validarSubsubcategoria;

		$respuesta = ControladorSubsubcategorias::ctrMostrarSubsubcategorias($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	EDITAR SUBCATEGORIA
	=============================================*/

	public $idSubsubcategoria;

	public function ajaxEditarSubsubcategoria(){

		$item = "id";
		$valor = $this->idSubsubcategoria;

		$respuesta = ControladorSubsubcategorias::ctrMostrarSubsubcategorias($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	TRAER SUBCATEGORIAS DE ACUERDO A LA CATEGORÍA
	=============================================*/

	public $idSubCategoria;

	public function ajaxTraerSubsubcategoria(){

		$item = "id_subcategoria";
		$valor = $this->idSubCategoria;

		$respuesta = ControladorSubsubcategorias::ctrMostrarSubsubcategorias($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
ACTIVAR SUBCATEGORIA
=============================================*/

if(isset($_POST["activarSubsubcategoria"])){

	$activarSubsubcategoria = new AjaxSubCategorias();
	$activarSubsubcategoria -> activarSubsubcategoria = $_POST["activarSubsubcategoria"];
	$activarSubsubcategoria -> activarId = $_POST["activarId"];
	$activarSubsubcategoria -> ajaxActivarSubsubCategoria();

}

/*=============================================
VALIDAR NO REPETIR SUBCATEGORÍA
=============================================*/

if(isset( $_POST["validarSubsubCategoria"])){

	$valSubsubCategoria = new AjaxSubsubCategorias();
	$valSubsubCategoria -> validarSubsubCategoria = $_POST["validarSubsubCategoria"];
	$valSubsubCategoria -> ajaxValidarSubsubCategoria();

}

/*=============================================
EDITAR SUBCATEGORIA
=============================================*/
if(isset($_POST["idSubsubCategoria"])){

	$editarSubsubCategoria = new AjaxSubsubCategorias();
	$editarSubsubCategoria -> idSubsubCategoria = $_POST["idSubsubCategoria"];
	$editarSubsubCategoria -> ajaxEditarSubsubCategoria();

}

/*=============================================
TRAER SUBCATEGORIAS DE ACUERDO A LA CATEGORÍA
=============================================*/
if(isset($_POST["idSubCategoria"])){

	$traerSubsubCategoria = new AjaxSubsubCategorias();
	$traerSubsubCategoria -> idSubCategoria = $_POST["idSubCategoria"];
	$traerSubsubCategoria -> ajaxTraerSubsubCategoria();

}