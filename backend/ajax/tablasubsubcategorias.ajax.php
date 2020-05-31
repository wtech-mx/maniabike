<?php

require_once "../controladores/subsubcategorias.controlador.php";
require_once "../modelos/subsubcategorias.modelo.php";

require_once "../controladores/subcategorias.controlador.php";
require_once "../modelos/subcategorias.modelo.php";

require_once "../controladores/cabeceras.controlador.php";
require_once "../modelos/cabeceras.modelo.php";

class TablaSubCategorias2{

  /*=============================================
  MOSTRAR LA TABLA DE SUBCATEGORÍAS
  =============================================*/

  public function mostrarTablaSubCategoria2(){

  	$item = null;
  	$valor = null;

  	$subcategorias2 = ControladorSubCategorias2::ctrMostrarSubCategorias2($item, $valor);
  	$datosJson = '{

      "data": [ ';

		for($i = 0; $i < count($subcategorias2); $i++){

			/*=============================================
  			TRAER LAS CATEGORÍAS
  			=============================================*/
  			$item = "id";
			$valor = $subcategorias2[$i]["id_subcategoria"];
			$subcategorias = ControladorSubCategorias::ctrMostrarSubCategorias($item, $valor);

			if($subcategorias[0]["subcategoria"] == ""){
				$subcategoria = "SIN SUBCATEGORÍA";
			}else{
				$subcategoria = $subcategorias[0]["subcategoria"];
			}
			/*=============================================
  			REVISAR ESTADO
  			=============================================*/

  			if( $subcategorias2[$i]["estado"] == 0){

  				$colorEstado = "btn-danger";
  				$textoEstado = "Desactivado";
  				$estadoSubCategoria2 = 1;

  			}else{

  				$colorEstado = "btn-success";
  				$textoEstado = "Activado";
  				$estadoSubCategoria2 = 0;

  			}

  			$estado = "<button class='btn btn-xs btnActivar ".$colorEstado."' idSubCategoria2='". $subcategorias2[$i]["id"]."' estadoSubCategoria2='".$estadoSubCategoria2."'>".$textoEstado."</button>";

  			/*=============================================
  			REVISAR IMAGEN PORTADA
  			=============================================*/

			$item2 = "ruta";
			$valor2 = $subcategorias2[$i]["ruta"];

			$cabeceras = ControladorCabeceras::ctrMostrarCabeceras($item2, $valor2);

  			if($cabeceras["portada"] != ""){

  				$imagenPortada = "<img src='".$cabeceras["portada"]."' class='img-thumbnail imgPortadaSubCategorias2' width='100px'>";

  			}else{

  				$imagenPortada = "<img src='vistas/img/cabeceras/default/default.jpg' class='img-thumbnail imgPortadaSubCategorias2' width='100px'>";
  			}

			/*=============================================
			REVISAR OFERTAS
			=============================================*/

			if($subcategorias2[$i]["oferta"] != 0){

				if($subcategorias2[$i]["precioOferta"] != 0){

					$tipoOferta = "PRECIO";
					$valorOferta = "$ ".number_format($subcategorias2[$i]["precioOferta"],2);

				}else{

					$tipoOferta = "DESCUENTO";
					$valorOferta = $subcategorias2[$i]["descuentoOferta"]." %";

				}

			}else{

				$tipoOferta = "No tiene oferta";
				$valorOferta = 0;

			}

  			if($subcategorias2[$i]["imgOferta"] != ""){

	  			$imgOferta = "<img src='".$subcategorias2[$i]["imgOferta"]."' class='img-thumbnail imgTablaSubCategorias2' width='100px'>";

	  		}else{

	  			$imgOferta = "<img src='vistas/img/ofertas/default/default.jpg' class='img-thumbnail imgTablaSubCategorias2' width='100px'>";

	  		}

	  		/*=============================================
  			CREAR LAS ACCIONES
  			=============================================*/

  			$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarSubCategoria2' idSubCategoria2='".$subcategorias2[$i]["id"]."' data-toggle='modal' data-target='#modalEditarSubCategoria2'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarSubCategoria2' idSubCategoria2='".$subcategorias2[$i]["id"]."' imgOferta='".$subcategorias2[$i]["imgOferta"]."' rutaCabecera='".$subcategorias2[$i]["ruta"]."' imgPortada='".$cabeceras["portada"]."'><i class='fa fa-times'></i></button></div>";

			 $datosJson .=  '
			 [
		      "'.($i+1).'",
		      "'.$subcategorias2[$i]["subcategoria2"].'",
		      "'.$subcategoria.'",
		      "'.$subcategorias2[$i]["ruta"].'",
		      "'.$estado.'",
		      "'.$cabeceras["descripcion"].'",
		      "'.$cabeceras["palabrasClaves"].'",
		      "'.$imagenPortada.'",
			  "'.$tipoOferta.'",
   	  		  "'.$valorOferta.'",
              "'.$imgOferta.'",
              "'.$subcategorias2[$i]["finOferta"].'",
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
$activarSubcategoria2 = new TablaSubCategorias2();
$activarSubcategoria2 -> mostrarTablaSubCategoria2();

