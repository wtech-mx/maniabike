<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Gestor SubSubcategorías
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor SubSubcategorías</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSubSubCategoria">

          Agregar SubSubCategoria

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaSubSubCategorias" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>SubSubCategoria</th>
           <th>SubCategoria</th>
           <th>Ruta</th>
           <th>Estado</th>
           <th>Descripción</th>
           <th>Palabras claves</th>
           <th>Portada</th>
           <th>Tipo de Oferta</th>
           <th>Valor Oferta</th>
           <th>Imagen Oferta</th>
           <th>Fin Oferta</th>
           <th>Acciones</th>

         </tr>

        </thead>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR SUBCATEGORÍA
======================================-->

<div id="modalAgregarSubSubCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar subsubcategoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL NOMBRE DE LA SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg validarSubSubCategoria tituloSubsubCategoria" name="tituloSubsubCategoria" placeholder="Ingresar subcategoría" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DE LA SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg rutaSubSubCategoria" name="rutaSubSubCategoria" placeholder="Ruta url de la subcategoría" readonly required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA SELECCIONAR LA CATEGORÍA
            ======================================-->



            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg seleccionarCategoria" name="seleccionarCategoria" required>

                  <option value="">Selecionar Subcategoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $subcategorias = ControladorSubCategorias::ctrMostrarSubCategorias($item, $valor);

                  foreach ($subcategorias as $key => $value) {

                    echo '<option value="'.$value["id"].'">'.$value["subcategoria"].'</option>';
                  }

                  ?>

                </select>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA DESCRIPCION
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <textarea type="text" maxlength="120" class="form-control input-lg"  name="descripcionSubsubCategoria" rows="3" placeholder="Ingresar descripción subcategoría" required></textarea>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LAS PALABRAS CLAVES
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-lg tagsInput" data-role="tagsinput"  name="pClavesSubSubCategoria" placeholder="Ingresar palabras claves" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA SUBIR LA FOTO DE PORTADA
            ======================================-->

            <div class="form-group">

              <div class="panel">SUBIR FOTO PORTADA</div>

              <input type="file" class="fotoPortada" name="fotoPortada">

              <p class="help-block">Tamaño recomendado 1280px * 720px <br> Peso máximo de la foto 2MB</p>

              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">

            </div>

            <!--=====================================
            ENTRADA PARA LA OFERTA
            ======================================-->

            <div class="form-group">

              <select class="form-control input-lg selActivarOferta" name="selActivarOferta">

                <option value="">No tiene oferta</option>
                <option value="oferta">Activar oferta</option>

              </select>

            </div>

           <div class="datosOferta" style="display:none">

              <!--=====================================
              VALOR DE LA OFERTA
              ======================================-->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                    <input class="form-control input-lg valorOferta" type="number" value="0" id="precioOferta" name="precioOferta" min="0" placeholder="Precio">

                  </div>

                </div>

                 <div class="col-xs-6">

                   <div class="input-group">

                    <input class="form-control input-lg valorOferta" type="number" value="0" id="descuentoOferta" name="descuentoOferta" min="0" placeholder="Descuento">
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>

              </div>

              <!--=====================================
              FECHA DE LA OFERTA
              ======================================-->

              <div class="form-group">

                <div class="input-group date">

                    <input type='text' class="form-control datepicker input-lg valorOferta" name="finOferta">

                    <span class="input-group-addon">

                        <span class="glyphicon glyphicon-calendar"></span>

                    </span>

                </div>

              </div>

              <!--=====================================
              ENTRADA PARA LA FOTO DE LA OFERTA
              ======================================-->

               <div class="form-group">

                <div class="panel">SUBIR FOTO OFERTA</div>

                <input type="file" class="fotoOferta valorOferta" name="fotoOferta">

                <p class="help-block">Tamaño recomendado 640px * 430px <br> Peso máximo de la foto 2MB</p>

                <img src="vistas/img/ofertas/default/default.jpg" class="img-thumbnail previsualizarOferta" width="100px">

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar subcategoría</button>

        </div>

         <?php

          $crearSubSubCategoria = new ControladorSubsubCategorias();
          $crearSubSubCategoria -> ctrCrearSubsubCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR SUBCATEGORÍA
======================================-->

<div id="modalEditarSubsubCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar subcategoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EDITAR EL TITULO DE LA SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg validarSubSubCategoria tituloSubSubCategoria"  name="editarTituloSubSubCategoria" required>

                <input type="hidden" class="editarIdSubSubCategoria" name="editarIdSubSubCategoria">
                <input type="hidden" class="editarIdCabecera" name="editarIdCabecera">

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA RUTA DE LA SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg rutaSubSubCategoria" name="rutaSubSubCategoria" readonly required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA SELECCIÓN DE LA CATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg seleccionarSubCategoria" name="seleccionarSubCategoria" required>

                  <option class="optionEditarCategoria"></option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorSubsubCategorias::ctrMostrarSubsubCategorias($item, $valor);

                  foreach ($categorias as $key => $value) {

                    echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                  }

                  ?>

                </select>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA DESCRIPCIÓN
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <textarea type="text" maxlength="120" class="form-control input-lg descripcionSubSubCategoria"  name="descripcionSubSubCategoria" required></textarea>



              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LAS PALABRAS CLAVES
            ======================================-->

            <div class="form-group editarPalabrasClaves">


            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA FOTO DE PORTADA
            ======================================-->

            <div class="form-group">

              <div class="panel">SUBIR FOTO PORTADA</div>

              <input type="file" class="fotoPortada" name="fotoPortada">
              <input type="hidden" class="antiguaFotoPortada" name="antiguaFotoPortada">

              <p class="help-block">Tamaño recomendado 1280px * 720px <br> Peso máximo de la foto 2MB</p>

              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA OFERTA
            ======================================-->

            <div class="form-group">

              <select class="form-control input-lg selActivarOferta" name="selActivarOferta">

                <option value="">No tiene oferta</option>
                <option value="oferta">Activar oferta</option>

              </select>

            </div>

           <div class="datosOferta" style="display:none">

              <!--=====================================
              ENTRADA PARA EDITAR EL TIPO DE OFERTA
              ======================================-->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                    <input class="form-control input-lg valorOferta" type="number" value="0" id="precioOferta" name="precioOferta" min="0" placeholder="Precio">

                  </div>

                </div>

                 <div class="col-xs-6">

                   <div class="input-group">

                    <input class="form-control input-lg valorOferta" type="number" value="0" id="descuentoOferta" name="descuentoOferta" min="0" placeholder="Descuento">
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>

              </div>

              <!--=====================================
              ENTRADA PARA EDITAR LA FECHA DE LA OFERTA
              ======================================-->

              <div class="form-group">

                <div class="input-group date">

                    <input type='text' class="form-control datepicker input-lg valorOferta finOferta" name="finOferta">

                    <span class="input-group-addon">

                        <span class="glyphicon glyphicon-calendar"></span>

                    </span>

                </div>

            </div>

               <!--=====================================
              ENTRADA PARA EDITAR LA FOTO DE LA OFERTA
              ======================================-->

               <div class="form-group">

                <div class="panel">SUBIR FOTO OFERTA</div>

                <input type="file" class="fotoOferta" name="fotoOferta">
                <input type="hidden" class="antiguaFotoOferta" name="antiguaFotoOferta">

                <p class="help-block">Tamaño recomendado 640px * 430px <br> Peso máximo de la foto 2MB</p>

                <img src="vistas/img/ofertas/default/default.jpg" class="img-thumbnail previsualizarOferta" width="100px">

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

         <?php

            $crearCategoria = new ControladorSubsubCategorias();
            $crearCategoria -> ctreditarSubsubCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

  $eliminarCategoria = new ControladorSubsubCategorias();
  $eliminarCategoria -> ctrEliminarSubsubCategoria();

?>

<script>

$(document).keydown(function(e){

  if(e.keyCode == 13){

    e.preventDefault();

  }

})

</script>
