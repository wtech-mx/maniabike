<?php


require_once "../controladores/subsubcategorias.controlador.php";
require_once "../modelos/subsubcategorias.modelo.php";

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

		$tabla = "subsubcategorias";

		$item1 = "estado";
		$valor1 = $this->activarSubCategoria2;

		$item2 = "id";
		$valor2 = $this->activarId;

		ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, "id_subsubcategoria", $valor2);

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
	TRAER SUBCATEGORIAS2 DE ACUERDO A LA SUBCATEGORÍA
	=============================================*/

	public $idSubCategoria;

	public function ajaxTraerSubCategoria2(){

		$item = "id_subcategoria";
		$valor = $this->idSubCategoria;

		$respuesta = ControladorSubCategorias2::ctrMostrarSubCategorias2($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
ACTIVAR SUBCATEGORIA2
=============================================*/

if(isset($_POST["activarSubCategoria2"])){

	$activarSubCategoria2 = new AjaxSubCategorias2();
	$activarSubCategoria2 -> activarSubCategoria2 = $_POST["activarSubCategoria2"];
	$activarSubCategoria2 -> activarId = $_POST["activarId"];
	$activarSubCategoria2 -> ajaxActivarSubCategoria2();

}

/*=============================================
VALIDAR NO REPETIR SUBCATEGORÍA2
=============================================*/

if(isset( $_POST["validarSubCategoria2"])){

	$valSubCategoria2 = new AjaxSubCategorias2();
	$valSubCategoria2 -> validarSubCategoria2 = $_POST["validarSubCategoria2"];
	$valSubCategoria2 -> ajaxValidarSubCategoria2();

}

/*=============================================
EDITAR SUBCATEGORIA2
=============================================*/
if(isset($_POST["idSubCategoria2"])){

	$editarSubCategoria2 = new AjaxSubCategorias2();
	$editarSubCategoria2 -> idSubCategoria2 = $_POST["idSubCategoria2"];
	$editarSubCategoria2 -> ajaxEditarSubCategoria2();

}

/*=============================================
TRAER SUBCATEGORIAS2 DE ACUERDO A LA SUBCATEGORÍA
=============================================*/
if(isset($_POST["idSubCategoria"])){

	$traerSubCategoria2 = new AjaxSubCategorias2();
	$traerSubCategoria2 -> idSubCategoria = $_POST["idSubCategoria"];
	$traerSubCategoria2 -> ajaxTraerSubCategoria2();

}