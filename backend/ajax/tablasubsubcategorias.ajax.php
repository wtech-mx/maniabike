<?php

require_once "../controladores/subsubcategorias.controlador.php";
require_once "../modelos/subsubcategorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/cabeceras.controlador.php";
require_once "../modelos/cabeceras.modelo.php";

class TablaSubCategorias{

  /*=============================================
  MOSTRAR LA TABLA DE SUB-SUBCATEGORÍAS
  =============================================*/

  public function mostrarTablaSubSubSubCategoria(){

  	$item = null;
  	$valor = null;

  	$subsubcategorias = ControladorSubSubCategorias::ctrMostrarSubSubCategorias($item, $valor);

  	$datosJson = '{

      "data": [ ';

		for($i = 0; $i < count($subsubcategorias); $i++){

			/*=============================================
  			TRAER LAS SUBCATEGORÍAS
  			=============================================*/

			$item = "id";
			$valor = $subsubcategorias[$i]["id_subcategoria"];

			$subcategorias = ControladorSubCategorias::ctrMostrarSubCategorias($item, $valor);

			if($subcategorias["subcategoria"] == ""){

				$subcategoria = "SIN SUBCATEGORÍA";

			}else{

				$subcategoria = $subcategorias["subcategoria"];
			}

			/*=============================================
  			REVISAR ESTADO
  			=============================================*/

  			if( $subsubcategorias[$i]["estado"] == 0){

  				$colorEstado = "btn-danger";
  				$textoEstado = "Desactivado";
  				$estadoSubSubCategoria = 1;

  			}else{

  				$colorEstado = "btn-success";
  				$textoEstado = "Activado";
  				$estadoSubSubCategoria = 0;

  			}

  			$estado = "<button class='btn btn-xs btnActivar ".$colorEstado."' idSubSubCategoria='". $subsubcategorias[$i]["id"]."' estadoSubSubCategoria='".$estadoSubSubCategoria."'>".$textoEstado."</button>";

  			/*=============================================
  			REVISAR IMAGEN PORTADA
  			=============================================

			$item2 = "ruta";
			$valor2 = $subcategorias[$i]["ruta"];

			$cabeceras = ControladorCabeceras::ctrMostrarCabeceras($item2, $valor2);

  			if($cabeceras["portada"] != ""){

  				$imagenPortada = "<img src='".$cabeceras["portada"]."' class='img-thumbnail imgPortadaSubCategorias' width='100px'>";

  			}else{

  				$imagenPortada = "<img src='vistas/img/cabeceras/default/default.jpg' class='img-thumbnail imgPortadaSubCategorias' width='100px'>";
  			}*/

			/*=============================================
			REVISAR OFERTAS
			=============================================

			if($subcategorias[$i]["oferta"] != 0){

				if($subcategorias[$i]["precioOferta"] != 0){

					$tipoOferta = "PRECIO";
					$valorOferta = "$ ".number_format($subcategorias[$i]["precioOferta"],2);

				}else{

					$tipoOferta = "DESCUENTO";
					$valorOferta = $subcategorias[$i]["descuentoOferta"]." %";

				}

			}else{

				$tipoOferta = "No tiene oferta";
				$valorOferta = 0;

			}

  			if($subcategorias[$i]["imgOferta"] != ""){

	  			$imgOferta = "<img src='".$subcategorias[$i]["imgOferta"]."' class='img-thumbnail imgTablaSubCategorias' width='100px'>";

	  		}else{

	  			$imgOferta = "<img src='vistas/img/ofertas/default/default.jpg' class='img-thumbnail imgTablaSubCategorias' width='100px'>";

	  		}

	  		/*=============================================
  			CREAR LAS ACCIONES
  			=============================================*/

  			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarSubSubCategoria' idSubSubCategoria='".$subsubcategorias[$i]["id"]."' data-toggle='modal' data-target='#modalEditarSubSubCategoria'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarSubSubCategoria' idSubSubCategoria='".$subsubcategorias[$i]["id"]."' rutaCabecera='".$subcategorias[$i]["ruta"]."'><i class='fa fa-times'></i></button></div>";


			 $datosJson .=  '
			 [
		      "'.($i+1).'",
		      "'.$subsubcategorias[$i]["subsubcategoria"].'",
		      "'.$subcategoria.'",
		      "'.$subsubcategorias[$i]["ruta"].'",
		      "'.$estado.'",
		      "'.$cabeceras["descripcion"].'",
		      "'.$cabeceras["palabrasClaves"].'",
	          "'.$acciones.'"
	    	],';

			}

	        $datosJson =  substr($datosJson, 0, -1);
	        $datosJson .=  '

          ]
        }';

    echo $datosJson;

  }

}

/*=============================================
ACTIVAR TABLA DE SUB-SUBCATEGORÍAS
=============================================*/
$activarSubcategoria = new TablaSubCategorias();
$activarSubcategoria -> mostrarTablaSubCategoria();

