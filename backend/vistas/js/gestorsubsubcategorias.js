/*=============================================
CARGAR LA TABLA DINÁMICA DE SUBCATEGORÍAS
=============================================*/

// $.ajax({

// 	url:"ajax/tablaSubCategorias.ajax.php",
// 	success:function(respuesta){

// 		console.log("respuesta", respuesta);

// 	}


// })

var tablaSubSubCategorias = $('.tablaSubSubCategorias').DataTable({

	"ajax":"ajax/tablaSubSubCategorias.ajax.php",
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
ACTIVAR SUB-SUBCATEGORÍA
=============================================*/

$('.tablaSubSubCategorias tbody').on("click", ".btnActivar", function(){

	var idSubSubCategoria = $(this).attr("idSubSubCategoria");
	var estadoSubSubCategoria = $(this).attr("estadoSubSubCategoria");

	var datos = new FormData();
 	datos.append("activarId", idSubSubCategoria);
  	datos.append("activarSubSubCategoria", estadoSubSubCategoria);

  	$.ajax({

	  url:"ajax/subSubCategorias.ajax.php",
	  method: "POST",
	  data: datos,
	  cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){
          // console.log("respuesta", respuesta);

      }

  	})

  	if(estadoSubSubCategoria == 0){

  		$(this).removeClass('btn-success');
  		$(this).addClass('btn-danger');
  		$(this).html('Desactivado');
  		$(this).attr('estadoSubSubCategoria',1);

  	}else{

  		$(this).addClass('btn-success');
  		$(this).removeClass('btn-danger');
  		$(this).html('Activado');
  		$(this).attr('estadoSubSubCategoria',0);

  	}

})


/*=============================================
REVISAR SI LA SUB-SUBCATEGORÍA YA EXISTE
=============================================*/

$(".validarSubSubCategoria").change(function(){

	$(".alert").remove();

	var subSubCategoria = $(this).val();

	var datos = new FormData();
	datos.append("validarSubSubCategoria", subSubCategoria);

	 $.ajax({
	    url:"ajax/subSubCategorias.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){

	    	// console.log("respuesta", respuesta);

	    	if(respuesta.length != 0){

	    		$(".validarSubSubCategoria").parent().after('<div class="alert alert-warning">Esta SubSubcategoría ya existe en la base de datos</div>');

	    		$(".validarSubSubCategoria").val("");

	    	}

	    }

	})
})

/*=============================================
RUTA SUB-SUBCATEGORÍA
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

$(".tituloSubSubCategoria").change(function(){

	$(".rutaSubSubCategoria").val(

		limpiarUrl($(".tituloSubSubCategoria").val())

	);

})


/*=============================================
EDITAR SUB-SUBCATEGORÍA
=============================================*/

$(".tablaSubSubCategorias tbody").on("click", ".btnEditarSubSubCategoria", function(){

	var idSubSubCategoria = $(this).attr("idSubSubCategoria");

	var datos = new FormData();
	datos.append("idSubSubCategoria", idSubSubCategoria);

	$.ajax({

		url:"ajax/subSubCategorias.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#modalEditarSubSubCategoria .editarIdSubSubCategoria").val(respuesta[0]["id"]);
			$("#modalEditarSubSubCategoria .tituloSubSubCategoria").val(respuesta[0]["subsubcategoria"]);
			$("#modalEditarSubSubCategoria .rutaSubSubCategoria").val(respuesta[0]["ruta"]);

			/*=============================================
			EDITAR NOMBRE SUB-SUBCATEGORÍA Y RUTA
			=============================================*/

			$("#modalEditarSubSubCategoria .tituloSubSubCategoria").change(function(){

				$("#modalEditarSubSubCategoria .rutaSubSubCategoria").val(limpiarUrl($("#modalEditarSubSubCategoria .tituloSubSubCategoria").val()));

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
						data: datosCategoria,
						cache: false,
						contentType: false,
						processData: false,
						dataType: "json",
						success: function(respuesta){

							$("#modalEditarSubSubCategoria .seleccionarSubCategoria").val(respuesta["id"]);
							$("#modalEditarSubSubCategoria .optionEditarSubCategoria").html(respuesta["subcategoria"]);
						}

					})

			}else{

				$("#modalEditarSubSubCategoria .optionEditarSubCategoria").html("SIN SUBCATEGORÍA");

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

						$("#modalEditarSubSubCategoria .editarIdCabecera").val(respuesta["id"]);

						/*=============================================
						CARGAMOS LA DESCRIPCION
						=============================================*/

						$("#modalEditarSubSubCategoria .descripcionSubSubCategoria").val(respuesta["descripcion"]);

						/*=============================================
						CARGAMOS LAS PALABRAS CLAVES
						=============================================*/

						if(respuesta["palabrasClaves"] != null){

							$(".editarPalabrasClaves").html('<div class="input-group">'+

	                		'<span class="input-group-addon"><i class="fa fa-key"></i></span>'+

							'<input type="text" class="form-control input-lg tagsInput pClavesSubSubCategoria" value="'+respuesta["palabrasClaves"]+'" data-role="tagsinput" name="pClavesSubSubCategoria">'+

							'</div>');

							$("#modalEditarSubSubCategoria .pClavesSubSubCategoria").tagsinput('items');

							$(".bootstrap-tagsinput").css({"padding":"11px",
							   						   "width":"100%",
 							   						   "border-radius":"1px"})

						}else{

							$(".editarPalabrasClaves").html('<div class="input-group">'+

	                		'<span class="input-group-addon"><i class="fa fa-key"></i></span>'+

							'<input type="text" class="form-control input-lg tagsInput pClavesSubSubCategoria" value="" data-role="tagsinput" name="pClavesSubSubCategoria">'+

							'</div>');

							$("#modalEditarSubSubCategoria .pClavesSubSubCategoria").tagsinput('items');

							$(".bootstrap-tagsinput").css({"padding":"11px",
							   						   "width":"100%",
 							   						   "border-radius":"1px"})

						}
					}

			});

		}

	});

})

/*=============================================
ELIMINAR SUB-SUBCATEGORÍA
=============================================*/
$(".tablaSubSubCategorias").on("click", ".btnEliminarSubSubCategoria", function(){

  var idSubSubCategoria = $(this).attr("idSubSubCategoria");
  var rutaCabecera = $(this).attr("rutaCabecera");

  swal({
    title: '¿Está seguro de borrar la sub-subcategoría?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar sub-subcategoría!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=subsubcategorias&idSubSubCategoria="+idSubSubCategoria+"&rutaCabecera="+rutaCabecera;

    }

  })

})


