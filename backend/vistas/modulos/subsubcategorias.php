<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Gestor Sub-subcategorías
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor Sub-subcategorías</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSubsubcategoria">

          Agregar Sub-subcategoría

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaSubsubategorias" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Sub-subcategoria</th>
           <th>Subcategoria</th>
           <th>Ruta</th>
           <th>Estado</th>
           <th>Descripción</th>
           <th>Palabras claves</th>
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

<div id="modalAgregarSubsubcategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Sub-subcategoría</h4>

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

                <input type="text" class="form-control input-lg validarSubsubcategoria tituloSubsubcategoria" name="tituloSubsubcategoria" placeholder="Ingresar Sub-subcategoría" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DE LA SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg rutaSubsubcategoria" name="rutaSubsubcategoria" placeholder="Ruta url de la Sub-subcategoría" readonly required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA SELECCIONAR LA CATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg seleccionarSubCategoria" name="seleccionarSubCategoria" required>

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

                <textarea type="text" maxlength="120" class="form-control input-lg"  name="descripcionSubsubcategoria" rows="3" placeholder="Ingresar descripción Sub-subcategoría" required></textarea>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LAS PALABRAS CLAVES
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="text" class="form-control input-lg tagsInput" data-role="tagsinput"  name="pClavesSubsubcategoria" placeholder="Ingresar palabras claves" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Sub-subcategoría</button>

        </div>

        <?php

          $crearSubsubcategoria = new ControladorSubsubcategorias();
          $crearSubsubcategoria -> ctrCrearSubsubcategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR SUBCATEGORÍA
======================================-->

<div id="modalEditarSubsubcategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Sub-subcategoría</h4>

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

                <input type="text" class="form-control input-lg validarSubsubcategoria tituloSubsubcategoria"  name="editarTituloSubsubcategoria" required>

                <input type="hidden" class="editarIdSubsubcategoria" name="editarIdSubsubcategoria">
                <input type="hidden" class="editarIdCabecera" name="editarIdCabecera">

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA RUTA DE LA SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg rutaSubsubcategoria" name="rutaSubsubcategoria" readonly required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA SELECCIÓN DE LA CATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg seleccionarSubCategoria" name="seleccionarSubCategoria" required>

                  <option class="optionEditarSubCategoria"></option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorSubCategorias::ctrMostrarSubCategorias($item, $valor);

                  foreach ($subcategorias as $key => $value) {

                    echo '<option value="'.$value["id"].'">'.$value["subcategoria"].'</option>';
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

                <textarea type="text" maxlength="120" class="form-control input-lg descripcionSubsubcategoria"  name="descripcionSubsubcategoria" required></textarea>



              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LAS PALABRAS CLAVES
            ======================================-->

            <div class="form-group editarPalabrasClaves">


            </div>





            </div>

          </div>

        </div>

        =====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

         <?php

            $crearSubCategoria = new ControladorSubsubcategorias();
            $crearSubCategoria -> ctrEditarSubsubcategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

  $eliminarSubCategoria = new ControladorSubsubcategorias();
  $eliminarSubCategoria -> ctrEliminarSubsubcategoria();

?>

<script>

$(document).keydown(function(e){

  if(e.keyCode == 13){

    e.preventDefault();

  }

})

</script>
