<?php

class ControladorSubSubCategorias{

	/*=============================================
	MOSTRAR SUB-SUBCATEGORIAS
	=============================================*/

	static public function ctrMostrarSubSubCategorias($item, $valor){

		$tabla = "subsubcategorias";

		$respuesta = ModeloSubSubCategorias::mdlMostrarSubSubCategorias($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR SUB-SUBCATEGORIA
	=============================================*/

	static public function ctrCrearSubSubCategoria(){

		if(isset($_POST["tituloSubSubCategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["tituloSubSubCategoria"]) && preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcionSubSubCategoria"])){

				/*=============================================
				PREGUNTAMOS SI VIENE OFERTE EN CAMINO
				=============================================*/

					$datos = array("subsubcategoria"=>$_POST["tituloSubSubCategoria"],
								   "idSubCategoria"=>$_POST["seleccionarSubCategoria"],
								   "ruta"=>$_POST["rutaSubSubCategoria"],
								   "estado"=> 1,
								   "titulo"=>$_POST["tituloSubSubCategoria"],
								   "descripcion"=> $_POST["descripcionSubSubCategoria"],
								   "palabrasClaves"=> $_POST["pClavesSubSubCategoria"]);


				ModeloCabeceras::mdlIngresarCabecera("cabeceras", $datos);

				$respuesta = ModeloSubSubCategorias::mdlIngresarSubSubCategoria("subsubcategorias", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La sub-subcategoría ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "subsubcategorias";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La sub-subcategoría no puede ir vacía o llevar caracteres especiales!",
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

	/*=============================================
	EDITAR SUB-SUBCATEGORIA
	=============================================*/

	static public function ctreditarSubSubCategoria(){

		if(isset($_POST["editarTituloSubSubCategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTituloSubSubCategoria"])&& preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcionSubSubCategoria"]) ){

				ModeloCabeceras::mdlEditarCabecera("cabeceras", $datos);

				$respuesta = ModeloSubSubCategorias::mdleditarSubSubCategoria("subsubcategorias", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La sub-subcategoría ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "subsubcategorias";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La sub-subcategoría no puede ir vacía o llevar caracteres especiales!",
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

	/*=============================================
	ELIMINAR SUB-SUBCATEGORIA
	=============================================*/

	static public function ctrEliminarSubSubCategoria(){

		if(isset($_GET["idSubSubCategoria"])){

			$datos = $_GET["idSubSubCategoria"];


			/*=============================================
			ELIMINAR CABECERA
			=============================================*/

			ModeloCabeceras::mdlEliminarCabecera("cabeceras", $_GET["rutaCabecera"]);

			/*=============================================
			QUITAR LAS SUB-SUBCATEGORIAS DE LOS PRODUCTOS
			=============================================*/

			$traerProductos = ModeloProductos::mdlMostrarProductos("productos", "id_subsubcategoria", $_GET["idSubSubCategoria"]);

			foreach ($traerProductos as $key => $value) {

				$item1 = "id_subsubcategoria";
				$valor1 = 0;
				$item2 = "id";
				$valor2 = $value["id"];

				ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, $item2, $valor2);

			}

			$respuesta = ModeloSubSubCategorias::mdlEliminarSubSubCategoria("subsubcategorias", $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La sub-subcategoría ha sido borrada correctamente",
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