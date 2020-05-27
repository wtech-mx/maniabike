<?php

require_once "../controladores/subsubcategorias.controlador.php";
require_once "../modelos/subsubcategorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/cabeceras.controlador.php";
require_once "../modelos/cabeceras.modelo.php";

class TablaSubsubCategorias{

  /*=============================================
  MOSTRAR LA TABLA DE SUBCATEGORÍAS
  =============================================*/

  public function mostrarTablaSubsubCategoria(){

  	$item = null;
  	$valor = null;

  	$subsubcategorias = ControladorSubsubCategorias::ctrMostrarSubsubCategorias($item, $valor);

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
  				$estadoSubsubCategoria = 1;

  			}else{

  				$colorEstado = "btn-success";
  				$textoEstado = "Activado";
  				$estadoSubsubCategoria = 0;

  			}

  			$estado = "<button class='btn btn-xs btnActivar ".$colorEstado."' idSubsubCategoria='". $subsubcategorias[$i]["id"]."' estadoSubsubCategoria='".$estadoSubsubCategoria."'>".$textoEstado."</button>";

  			/*=============================================
  			REVISAR IMAGEN PORTADA
  			=============================================*/

			$item2 = "ruta";
			$valor2 = $subsubcategorias[$i]["ruta"];

			$cabeceras = ControladorCabeceras::ctrMostrarCabeceras($item2, $valor2);

  			if($cabeceras["portada"] != ""){

  				$imagenPortada = "<img src='".$cabeceras["portada"]."' class='img-thumbnail imgPortadaSubsubCategorias' width='100px'>";

  			}else{

  				$imagenPortada = "<img src='vistas/img/cabeceras/default/default.jpg' class='img-thumbnail imgPortadaSubsubCategorias' width='100px'>";
  			}

			/*=============================================
			REVISAR OFERTAS
			=============================================*/

			if($subsubcategorias[$i]["oferta"] != 0){

				if($subsubcategorias[$i]["precioOferta"] != 0){

					$tipoOferta = "PRECIO";
					$valorOferta = "$ ".number_format($subsubcategorias[$i]["precioOferta"],2);

				}else{

					$tipoOferta = "DESCUENTO";
					$valorOferta = $subsubcategorias[$i]["descuentoOferta"]." %";

				}

			}else{

				$tipoOferta = "No tiene oferta";
				$valorOferta = 0;

			}

  			if($subsubcategorias[$i]["imgOferta"] != ""){

	  			$imgOferta = "<img src='".$subsubcategorias[$i]["imgOferta"]."' class='img-thumbnail imgTablaSubsubCategorias' width='100px'>";

	  		}else{

	  			$imgOferta = "<img src='vistas/img/ofertas/default/default.jpg' class='img-thumbnail imgTablaSubsubCategorias' width='100px'>";

	  		}

	  		/*=============================================
  			CREAR LAS ACCIONES
  			=============================================*/

  			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarSubsubCategoria' idSubsubCategoria='".$subsubcategorias[$i]["id"]."' data-toggle='modal' data-target='#modalEditarSubsubCategoria'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarSubsubCategoria' idSubsubCategoria='".$subsubcategorias[$i]["id"]."' imgOferta='".$subsubcategorias[$i]["imgOferta"]."' rutaCabecera='".$subsubcategorias[$i]["ruta"]."' imgPortada='".$cabeceras["portada"]."'><i class='fa fa-times'></i></button></div>";


			 $datosJson .=  '
			 [
		      "'.($i+1).'",
		      "'.$subsubcategorias[$i]["subsubcategoria"].'",
		      "'.$subcategoria.'",
		      "'.$subsubcategorias[$i]["ruta"].'",
		      "'.$estado.'",
		      "'.$cabeceras["descripcion"].'",
		      "'.$cabeceras["palabrasClaves"].'",
		      "'.$imagenPortada.'",
			  "'.$tipoOferta.'",
   	  		  "'.$valorOferta.'",
              "'.$imgOferta.'",
              "'.$subcategorias[$i]["finOferta"].'",
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
ACTIVAR TABLA DE SUBCATEGORÍAS
=============================================*/
$activarSubsubcategoria = new TablaSubsubCategorias();
$activarSubsubcategoria -> mostrarTablaSubsubCategoria();

