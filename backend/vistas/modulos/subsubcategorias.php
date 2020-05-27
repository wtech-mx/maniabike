<div class="content-wrapper">

  <section class="content-header">

    <h1>
      Gestor Sub-Subcategorías
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor Sub-Subcategorías</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSubSubCategoria">

          Agregar sub-subcategoría

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablaSubSubCategorias" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Sub-subcategoria</th>
           <th>SubCategoria</th>
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
MODAL AGREGAR SUB-SUBCATEGORÍA
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

          <h4 class="modal-title">Agregar sub-subcategoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL NOMBRE DE LA SUB-SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg validarSubSubCategoria tituloSubSubCategoria" name="tituloSubSubCategoria" placeholder="Ingresar sub-subcategoría" required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DE LA SUB-SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg rutaSubSubCategoria" name="rutaSubSubCategoria" placeholder="Ruta url de la sub-subcategoría" readonly required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA SELECCIONAR LA SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg seleccionarSubCategoria" name="seleccionarSubCategoria" required>

                  <option value="">Selecionar subcategoría</option>

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

                <textarea type="text" maxlength="120" class="form-control input-lg"  name="descripcionSubSubCategoria" rows="3" placeholder="Ingresar descripción sub-subcategoría" required></textarea>

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

          $crearSubSubCategoria = new ControladorSubSubCategorias();
          $crearSubSubCategoria -> ctrCrearSubSubCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR SUB-SUBCATEGORÍA
======================================-->

<div id="modalEditarSubSubCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar sub-subcategoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EDITAR EL TITULO DE LA SUB-SUBCATEGORÍA
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
            ENTRADA PARA EDITAR LA RUTA DE LA SUB-SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-link"></i></span>

                <input type="text" class="form-control input-lg rutaSubSubCategoria" name="rutaSubSubCategoria" readonly required>

              </div>

            </div>

            <!--=====================================
            ENTRADA PARA EDITAR LA SELECCIÓN DE LA SUB-                                                                                    SUBCATEGORÍA
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg seleccionarSubCategoria" name="seleccionarSubCategoria" required>

                  <option class="optionEditarSubCategoria"></option>

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

            $crearSubCategoria = new ControladorSubSubCategorias();
            $crearSubCategoria -> ctrEditarSubSubCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

  $eliminarSubCategoria = new ControladorSubSubCategorias();
  $eliminarSubCategoria -> ctrEliminarSubSubCategoria();

?>

<script>

$(document).keydown(function(e){

  if(e.keyCode == 13){

    e.preventDefault();

  }

})

</script>
