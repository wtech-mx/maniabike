/*=============================================
CARGAR LA TABLA DINÁMICA DE SUBCATEGORÍAS
=============================================*/

//$.ajax({

//	url:"ajax/tablasubsubcategorias.ajax.php",
//	success:function(respuesta){

//		console.log("respuesta", respuesta);

//	}


//})

var tablaSubCategorias2 = $('.tablaSubCategorias2').DataTable({

	"ajax":"ajax/tablasubsubcategorias.ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
    "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

});


/*=============================================
ACTIVAR SUBCATEGORÍA
=============================================*/

$('.tablaSubCategorias2 tbody').on("click", ".btnActivar", function(){

	var idSubCategoria2 = $(this).attr("idSubCategoria2");
	var estadoSubCategoria2 = $(this).attr("estadoSubCategoria2");

	var datos = new FormData();
 	datos.append("activarId", idSubCategoria2);
  	datos.append("activarSubCategoria2", estadoSubCategoria2);

  	$.ajax({

	  url:"ajax/subsubcategorias.ajax.php",
	  method: "POST",
	  data: datos,
	  cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){
          // console.log("respuesta", respuesta);

      }

  	})

  	if(estadoSubCategoria2 == 0){

  		$(this).removeClass('btn-success');
  		$(this).addClass('btn-danger');
  		$(this).html('Desactivado');
  		$(this).attr('estadoSubCategoria2',1);

  	}else{

  		$(this).addClass('btn-success');
  		$(this).removeClass('btn-danger');
  		$(this).html('Activado');
  		$(this).attr('estadoSubCategoria2',0);

  	}

})


/*=============================================
REVISAR SI LA SUBCATEGORÍA2 YA EXISTE
=============================================*/

$(".validarSubCategoria2").change(function(){

	$(".alert").remove();

	var subCategoria2 = $(this).val();

	var datos = new FormData();
	datos.append("validarSubCategoria2", subCategoria2);

	 $.ajax({
	    url:"ajax/subsubcategorias.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){

	    	// console.log("respuesta", respuesta);

	    	if(respuesta.length != 0){

	    		$(".validarSubCategoria2").parent().after('<div class="alert alert-warning">Esta Subcategoría2 ya existe en la base de datos</div>');

	    		$(".validarSubCategoria2").val("");

	    	}

	    }

	})
})

/*=============================================
RUTA SUBCATEGORÍA
=============================================*/

function limpiarUrl(texto){
      var texto = texto.toLowerCase();
      texto = texto.replace(/[á]/, 'a');
      texto = texto.replace(/[é]/, 'e');
      texto = texto.replace(/[í]/, 'i');
      texto = texto.replace(/[ó]/, 'o');
      texto = texto.replace(/[ú]/, 'u');
      texto = texto.replace(/[ñ]/, 'n');
      texto = texto.replace(/ /g, "-")
      return texto;
   }

$(".tituloSubCategoria2").change(function(){

	$(".rutaSubCategoria2").val(

		limpiarUrl($(".tituloSubCategoria2").val())

	);

})

/*=============================================
SUBIENDO LA FOTO DE PORTADA
=============================================*/

$(".fotoPortada").change(function(){

	var imagen = this.files[0];

	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

  		$(".nuevaFotoPortada").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 2000000){

  		$(".fotoPortada").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$(".previsualizarPortada").attr("src", rutaImagen);

  		})

  	}
})

/*=============================================
ACTIVAR OFERTA
=============================================*/

function activarOferta(event){

	if(event == "oferta"){

		$(".datosOferta").show();
		$(".valorOferta").prop("required",true);
		$(".valorOferta").val("");



	}else{

		$(".datosOferta").hide();
		$(".valorOferta").prop("required",false);
		$(".valorOferta").val("");

	}
}


$(".selActivarOferta").change(function(){

	activarOferta($(this).val())

})

/*=============================================
VALOR OFERTA
=============================================*/
$(".valorOferta").change(function(){

	if($(this).attr("id") == "precioOferta"){

		$("#precioOferta").prop("readonly",true);
		$("#descuentoOferta").prop("readonly",false);
		$("#descuentoOferta").val(0);

	}

	if($(this).attr("id") == "descuentoOferta"){

		$("#descuentoOferta").prop("readonly",true);
		$("#precioOferta").prop("readonly",false);
		$("#precioOferta").val(0);

	}


})

/*=============================================
SUBIENDO LA FOTO DE LA OFERTA
=============================================*/

$(".fotoOferta").change(function(){

	var imagen = this.files[0];

	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

  		$(".fotoOferta").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 2000000){

  		$(".fotoOferta").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$(".previsualizarOferta").attr("src", rutaImagen);

  		})

  	}
})

/*=============================================
EDITAR SUBCATEGORÍA2
=============================================*/

$(".tablaSubCategorias2 tbody").on("click", ".btnEditarSubCategoria2", function(){

	var idSubCategoria2 = $(this).attr("idSubCategoria2");

	var datos = new FormData();
	datos.append("idSubCategoria2", idSubCategoria2);

	$.ajax({

		url:"ajax/subsubcategorias.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#modalEditarSubCategoria2 .editarIdSubCategoria2").val(respuesta[0]["id"]);
			$("#modalEditarSubCategoria2 .tituloSubCategoria2").val(respuesta[0]["subsubcategoria"]);
			$("#modalEditarSubCategoria2 .rutaSubCategoria2").val(respuesta[0]["ruta"]);

			/*=============================================
			EDITAR NOMBRE SUBCATEGORÍA2 Y RUTA
			=============================================*/

			$("#modalEditarSubCategoria2 .tituloSubCategoria2").change(function(){

				$("#modalEditarSubCategoria2 .rutaSubCategoria2").val(limpiarUrl($("#modalEditarSubCategoria2 .tituloSubCategoria2").val()));

			})

			/*=============================================
			TRAEMOS LA SUBCATEGORIA
			=============================================*/

			if(respuesta[0]["id_subcategoria"] != 0){

				var datosSubCategoria = new FormData();
				datosSubCategoria.append("idSubCategoria", respuesta[0]["id_subcategoria"]);


				$.ajax({

						url:"ajax/subCategorias.ajax.php",
						method: "POST",
						data: datosSubCategoria,
						cache: false,
						contentType: false,
						processData: false,
						dataType: "json",
						success: function(respuesta){

							$("#modalEditarSubCategoria2 .seleccionarSubCategoria").val(respuesta["id"]);
							$("#modalEditarSubCategoria2 .optionEditarSubCategoria").html(respuesta["subcategoria"]);
						}

					})

			}else{

				$("#modalEditarSubCategoria2 .optionEditarSubCategoria").html("SIN SUBCATEGORÍA");

			}

			/*=============================================
			TRAEMOS DATOS DE CABECERA
			=============================================*/

			var datosCabecera = new FormData();
			datosCabecera.append("ruta", respuesta[0]["ruta"]);

			$.ajax({

					url:"ajax/cabeceras.ajax.php",
					method: "POST",
					data: datosCabecera,
					cache: false,
					contentType: false,
					processData: false,
					dataType: "json",
					success: function(respuesta){
						// console.log("respuesta", respuesta);

						/*=============================================
						CARGAMOS EL ID DE LA CABECERA
						=============================================*/

						$("#modalEditarSubCategoria2 .editarIdCabecera").val(respuesta["id"]);

						/*=============================================
						CARGAMOS LA DESCRIPCION
						=============================================*/

						$("#modalEditarSubCategoria2 .descripcionSubCategoria2").val(respuesta["descripcion"]);

						/*=============================================
						CARGAMOS LAS PALABRAS CLAVES
						=============================================*/

						if(respuesta["palabrasClaves"] != null){

							$(".editarPalabrasClaves").html('<div class="input-group">'+

	                		'<span class="input-group-addon"><i class="fa fa-key"></i></span>'+

							'<input type="text" class="form-control input-lg tagsInput pClavesSubCategoria2" value="'+respuesta["palabrasClaves"]+'" data-role="tagsinput" name="pClavesSubCategoria2">'+

							'</div>');

							$("#modalEditarSubCategoria2 .pClavesSubCategoria2").tagsinput('items');

							$(".bootstrap-tagsinput").css({"padding":"11px",
							   						   "width":"100%",
 							   						   "border-radius":"1px"})

						}else{

							$(".editarPalabrasClaves").html('<div class="input-group">'+

	                		'<span class="input-group-addon"><i class="fa fa-key"></i></span>'+

							'<input type="text" class="form-control input-lg tagsInput pClavesSubCategoria2" value="" data-role="tagsinput" name="pClavesSubCategoria2">'+

							'</div>');

							$("#modalEditarSubCategoria2 .pClavesSubCategoria2").tagsinput('items');

							$(".bootstrap-tagsinput").css({"padding":"11px",
							   						   "width":"100%",
 							   						   "border-radius":"1px"})

						}

						/*=============================================
						CARGAMOS LA IMAGEN DE PORTADA
						=============================================*/

						$("#modalEditarSubCategoria2 .previsualizarPortada").attr("src", respuesta["portada"]);
						$("#modalEditarSubCategoria2 .antiguaFotoPortada").val(respuesta["portada"]);
					}

			});

			/*=============================================
			PREGUNTAMOS SI EXITE OFERTA
			=============================================*/

			if(respuesta[0]["oferta"] != 0){

				$("#modalEditarSubCategoria2 .selActivarOferta").val("oferta");

				$("#modalEditarSubCategoria2 .datosOferta").show();
				$("#modalEditarSubCategoria2 .valorOferta").prop("required",true);

				$("#modalEditarSubCategoria2 #precioOferta").val(respuesta[0]["precioOferta"]);
				$("#modalEditarSubCategoria2 #descuentoOferta").val(respuesta[0]["descuentoOferta"]);

				if(respuesta[0]["precioOferta"] != 0){

					$("#modalEditarSubCategoria2 #precioOferta").prop("readonly",true);
					$("#modalEditarSubCategoria2 #descuentoOferta").prop("readonly",false);

				}

				if(respuesta[0]["descuentoOferta"] != 0){

					$("#modalEditarSubCategoria2 #descuentoOferta").prop("readonly",true);
					$("#modalEditarSubCategoria2 #precioOferta").prop("readonly",false);

				}

				$("#modalEditarSubCategoria2 .previsualizarOferta").attr("src", respuesta[0]["imgOferta"]);

				$("#modalEditarSubCategoria2 .antiguaFotoOferta").val(respuesta[0]["imgOferta"]);

				$("#modalEditarSubCategoria2 .finOferta").val(respuesta[0]["finOferta"]);

			}else{

				$("#modalEditarSubCategoria2 .selActivarOferta").val("");
				$("#modalEditarSubCategoria2 .datosOferta").hide();
				$("#modalEditarSubCategoria2 .valorOferta").prop("required",false);
				$("#modalEditarSubCategoria2 .previsualizarOferta").attr("src", "vistas/img/ofertas/default/default.jpg");
				$("#modalEditarSubCategoria2 .antiguaFotoOferta").val(respuesta[0]["imgOferta"]);

			}

			/*=============================================
			CREAR NUEVA OFERTA AL EDITAR
			=============================================*/

			$("#modalEditarSubCategoria2 .selActivarOferta").change(function(){

				activarOferta($(this).val())

			})

			$("#modalEditarSubCategoria2 .valorOferta").change(function(){

				if($(this).attr("id") == "precioOferta"){

					$("#modalEditarSubCategoria2 #precioOferta").prop("readonly",true);
					$("#modalEditarSubCategoria2 #descuentoOferta").prop("readonly",false);
					$("#modalEditarSubCategoria2 #descuentoOferta").val(0);

				}

				if($(this).attr("id") == "descuentoOferta"){

					$("#modalEditarSubCategoria2 #descuentoOferta").prop("readonly",true);
					$("#modalEditarSubCategoria2 #precioOferta").prop("readonly",false);
					$("#modalEditarSubCategoria2 #precioOferta").val(0);

				}

			})

		}

	});

})

/*=============================================
ELIMINAR SUBCATEGORÍA
=============================================*/
$(".tablaSubCategorias2").on("click", ".btnEliminarSubCategoria2", function(){

  var idSubCategoria2 = $(this).attr("idSubCategoria2");
  var imgOferta = $(this).attr("imgOferta");
  var rutaCabecera = $(this).attr("rutaCabecera");
  var imgPortada = $(this).attr("imgPortada");

  swal({
    title: '¿Está seguro de borrar la subcategoría2?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar subcategoría2!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=subsubcategorias&idSubCategoria2="+idSubCategoria2+"&imgOferta="+imgOferta+"&rutaCabecera="+rutaCabecera+"&imgPortada="+imgPortada;

    }

  })

})


