<?php


require_once "../controladores/subsubcategorias.controlador.php";
require_once "../modelos/subsubcategorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class AjaxSubsubCategorias{

	/*=============================================
  	ACTIVAR SUBsubCATEGORIA
 	=============================================*/

	public $activarSubsubCategoria;
	public $activarId;

	public function ajaxActivarSubsubCategoria(){

		$tabla = "subsubcategorias";

		$item1 = "estado";
		$valor1 = $this->activarSubsubCategoria;

		$item2 = "id";
		$valor2 = $this->activarId;

		ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, "id_subsubcategoria", $valor2);

		$respuesta = ModeloSubsubCategorias::mdlActualizarSubsubCategorias($tabla, $item1, $valor1, $item2, $valor2);

		echo $respuesta;

	}

	/*=============================================
	VALIDAR NO REPETIR SUBsubCATEGORÍA
	=============================================*/

	public $validarSubsubCategoria;

	public function ajaxValidarSubsubCategoria(){

		$item = "subsubcategoria";
		$valor = $this->validarSubsubCategoria;

		$respuesta = ControladorSubsubCategorias::ctrMostrarSubsubCategorias($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	EDITAR SUBsubCATEGORIA
	=============================================*/

	public $idSubsubCategoria;

	public function ajaxEditarSubsubCategoria(){

		$item = "id";
		$valor = $this->idSubsubCategoria;

		$respuesta = ControladorSubsubCategorias::ctrMostrarSubsubCategorias($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	TRAER SUBsubCATEGORIAS DE ACUERDO A LA CATEGORÍA
	=============================================*/

	public $idSubCategoria;

	public function ajaxTraerSubsubCategoria(){

		$item = "id_subcategoria";
		$valor = $this->idSubCategoria;

		$respuesta = ControladorSubsubCategorias::ctrMostrarSubsubCategorias($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
ACTIVAR SUBsubCATEGORIA
=============================================*/

if(isset($_POST["activarSubsubCategoria"])){

	$activarSubsubCategoria = new AjaxSubsubCategorias();
	$activarSubsubCategoria -> activarSubsubCategoria = $_POST["activarSubsubCategoria"];
	$activarSubsubCategoria -> activarId = $_POST["activarId"];
	$activarSubsubCategoria -> ajaxActivarSubsubCategoria();

}

/*=============================================
VALIDAR NO REPETIR SUBsubCATEGORÍA
=============================================*/

if(isset( $_POST["validarSubsubCategoria"])){

	$valSubsubCategoria = new AjaxSubsubCategorias();
	$valSubsubCategoria -> validarSubsubCategoria = $_POST["validarSubsubCategoria"];
	$valSubsubCategoria -> ajaxValidarSubsubCategoria();

}

/*=============================================
EDITAR SUBsubCATEGORIA
=============================================*/
if(isset($_POST["idSubsubCategoria"])){

	$editarSubsubCategoria = new AjaxSubsubCategorias();
	$editarSubsubCategoria -> idSubsubCategoria = $_POST["idSubsubCategoria"];
	$editarSubsubCategoria -> ajaxEditarSubsubCategoria();

}

/*=============================================
TRAER SUBsubCATEGORIAS DE ACUERDO A LA CATEGORÍA
=============================================*/
if(isset($_POST["idSubCategoria"])){

	$traerSubsubCategoria = new AjaxSubsubCategorias();
	$traerSubsubCategoria -> idSubCategoria = $_POST["idSubCategoria"];
	$traerSubsubCategoria -> ajaxTraerSubsubCategoria();

}