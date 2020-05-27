<?php

class ControladorSubsubcategorias{

	/*=============================================
	MOSTRAR SUBCATEGORIAS
	=============================================*/

	static public function ctrMostrarSubsubcategorias($item, $valor){

		$tabla = "subsubcategorias";

		$respuesta = ModeloSubsubcategorias::mdlMostrarSubsubcategorias($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR SUBCATEGORIA
	=============================================*/

	static public function ctrCrearSubsubcategoria(){

		if(isset($_POST["tituloSubsubcategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["tituloSubsubcategoria"]) && preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcionSubsubcategoria"])){

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La subcategoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "subcategorias";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	EDITAR SUBCATEGORIA
	=============================================*/

	static public function ctreditarSubsubcategoria(){

		if(isset($_POST["editarTituloSubsubcategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTituloSubsubcategoria"])&& preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcionSubsubcategoria"]) ){

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La subcategoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "subcategorias";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	ELIMINAR SUBCATEGORIA
	=============================================*/

	static public function ctrEliminarSubCategoria(){

		if(isset($_GET["idSubsubcategoria"])){

			$datos = $_GET["idSubsubcategoria"];

			/*=============================================
			QUITAR LAS SUBATEGORIAS DE LOS PRODUCTOS
			=============================================*/

			$traerProductos = ModeloProductos::mdlMostrarProductos("productos", "id_subsubcategoria", $_GET["idSubsubcategoria"]);

			foreach ($traerProductos as $key => $value) {

				$item1 = "id_subsubcategoria";
				$valor1 = 0;
				$item2 = "id";
				$valor2 = $value["id"];

				ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, $item2, $valor2);

			}

			$respuesta = ModeloSubsubcategorias::mdlEliminarSubsubcategoria("subsubcategorias", $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La Sub-subcategoría ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "subsubcategorias";

								}
							})

				</script>';

			}

		}

	}

}