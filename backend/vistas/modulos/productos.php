<div class="content-wrapper">

  <section class="content-header">

   <h1>
      Gestor Productos
    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor Productos</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">

          Agregar Producto

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">

          <thead>

            <tr>

               <th style="width:10px">#</th>
               <th>Titulo</th>
               <th>Categoria</th>
               <th>Subcategoria</th>
                <th>Sub-subcategoria</th>
               <th>Ruta</th>
               <th>Estado</th>
               <th>Tipo</th>
               <th>Descripción</th>
               <th>Palabras claves</th>
               <th>Imagen Principal</th>
               <th>Multimedia</th>
               <th>Detalles</th>
               <th>Precio</th>
               <th>Ancho</th>
               <th>Altura</th>
               <th>Largo</th>
               <th>Peso Volumetrico</th>
               <th>stock</th>
               <th>Tiempo de Entrega</th>
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
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

   <div class="modal-dialog">

     <div class="modal-content">

       <form role="form" method="post" enctype="multipart/form-data"  oninput="w.value=parseInt(a.value)*(b.value)+parseInt(c.value),x.value=parseInt(w.value)+parseInt(a.value)*(d.value),y.value=parseInt(a.value)+parseInt(x.value),z.value=(l.value)*(m.value)*(n.value)/500">

         <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL TÍTULO
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                  <input type="text" maxlength="1000" class="form-control input-lg validarProducto tituloProducto"  placeholder="Ingresar título producto">

                </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-link"></i></span>

                  <input type="text" maxlength="1000" class="form-control input-lg rutaProducto" placeholder="Ruta url del producto" readonly>

                </div>

            </div>

           <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>

                  <select class="form-control input-lg seleccionarTipo">

                    <option value="">Selecionar tipo de producto</option>

                    <!--<option value="virtual">Virtual</option>-->

                    <option value="fisico">Físico</option>

                  </select>

                </div>

            </div>

            <!--=====================================
            ENTRADA PARA AGREGAR MULTIMEDIA
            ======================================

            <div class="form-group agregarMultimedia"> -->

              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO VIRTUAL
              ======================================

              <div class="input-group multimediaVirtual" style="display:none">

                <span class="input-group-addon"><i class="fa fa-youtube-play"></i></span>

                 <input type="text" class="form-control input-lg multimedia" placeholder="Ingresar código video youtube">

              </div>-->

              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO FÍSICO
              ======================================-->

              <div class="multimediaFisica needsclick dz-clickable" style="display:none">

                <div class="dz-message needsclick">

                  Arrastrar o dar click para subir imagenes.

                </div>

              </div>

            <!--=====================================
            AGREGAR DETALLES VIRTUALES
            ======================================


            <div class="detallesVirtual" style="display:none">

              <div class="panel">DETALLES</div>

                 CLASES

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Clases" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleClases" placeholder="Descripción">
                  </div>

                </div>

                TIEMPO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Tiempo" readonly>
                  </div>

                  <div class="col-xs-9">
                    <input type="text" class="form-control input-lg detalleTiempo" placeholder="Descripción">
                  </div>

                </div>
                 NIVEL

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Nivel" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleNivel" placeholder="Descripción">
                  </div>

                </div>

               ACCESO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Acceso" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleAcceso" placeholder="Descripción">
                  </div>

                </div>

                DISPOSITIVO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Dispositivo" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleDispositivo" placeholder="Descripción">
                  </div>

                </div>

                CERTIFICADO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Certificado" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleCertificado" placeholder="Descripción">
                  </div>

                </div>

            </div> -->

            <!--=====================================
            AGREGAR DETALLES FÍSICOS
            ======================================-->

            <div class="detallesFisicos" style="display:none">

              <div class="panel">DETALLES</div>

              <!-- TALLA

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Volumen" readonly>
                  </div>

                  <div class="col-xs-9">
                    <input class="form-control input-lg tagsInput detalleTalla" data-role="tagsinput" type="text" placeholder="Separe valores con coma">
                  </div>

              </div>-->

              <!-- COLOR -->

              <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Color" readonly>
                </div>

                <div class="col-xs-9">
                    <input class="form-control input-lg tagsInput detalleColor" data-role="tagsinput" type="text" placeholder="Separe valores con coma">
                </div>

              </div>

              <!-- MARCA -->

              <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Marca" readonly>
                </div>

                <div class="col-xs-9">
                    <input class="form-control input-lg tagsInput detalleMarca" data-role="tagsinput" type="text" placeholder="Separe valores con coma">
                </div>

              </div>

              <!-- Medidas -->

<!--               <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Medidas" readonly>
                </div>

                <div class="col-xs-9">
                    <input class="form-control input-lg tagsInput detalleMedidas" data-role="tagsinput" type="text" placeholder="Separe valores con coma">
                </div>

              </div> -->

            </div>

           <!--=====================================
            AGREGAR CATEGORÍA
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg seleccionarCategoria">

                    <option value="">Selecionar categoría</option>

                    <?php

                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                    foreach ($categorias as $key => $value) {

                      echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                    }

                    ?>

                  </select>

                </div>

            </div>

            <!--=====================================
            AGREGAR SUBCATEGORÍA
            ======================================-->

            <div class="form-group  entradaSubcategoria" style="display:none">

               <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg seleccionarSubCategoria">

                  </select>

                </div>

            </div>

            <!--=====================================
            AGREGAR SUBCATEGORÍA2
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg seleccionarSubCategoria2">

                    <option value="">Selecionar Sub-subcategoría</option>

                    <?php

                    $item = null;
                    $valor = null;

                    $subcategorias2 = ControladorSubCategorias2::ctrMostrarSubCategorias2($item, $valor);

                    foreach ($subcategorias2 as $key => $value) {

                      echo '<option value="'.$value["id"].'">'.$value["subcategoria2"].'</option>';
                    }

                    ?>

                  </select>

                </div>

            </div>

           <!--=====================================
            AGREGAR DESCRIPCIÓN
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <textarea type="text" maxlength="1000" rows="6" class="form-control input-lg descripcionProducto" placeholder="Ingresar descripción producto"></textarea>

              </div>

            </div>

            <!--=====================================
            AGREGAR PALABRAS CLAVES
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg tagsInput pClavesProducto" data-role="tagsinput"  placeholder="Ingresar palabras claves">

                </div>

            </div>

            <!--=====================================
            AGREGAR FOTO DE PORTADA
            ======================================

            <div class="form-group">

              <div class="panel">SUBIR FOTO PORTADA</div>

              <input type="file" class="fotoPortada">

              <p class="help-block">Tamaño recomendado 1280px * 720px <br> Peso máximo de la foto 2MB</p>

              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">

            </div>-->

            <!--=====================================
            AGREGAR FOTO DE MULTIMEDIA
            ======================================-->

            <div class="form-group">

              <div class="panel">SUBIR FOTO PRINCIPAL DEL PRODUCTO</div>

              <input type="file" class="fotoPrincipal">

              <p class="help-block">Tamaño recomendado 400px * 450px <br> Peso máximo de la foto 2MB</p>

               <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizarPrincipal" width="200px">

            </div>

            <!--=====================================
            AGREGAR PRECIO, ANCHO, PESO, PESO Y ENTREGA
            ======================================-->

            <div class="form-group row">

              <!-- PRECIO

              <div class="col-md-4 col-xs-12">

                <div class="panel">PRECIO</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input type="number" placeholder="MXM" class="form-control input-lg precio" min="" step="any">

                </div>

              </div> -->

              <!-- Costo -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Costo</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input type="number" placeholder="MXM" class="form-control input-lg costo" min="" step="any"  id="a" name="a">

                </div>

              </div>

              <!-- Utilidad -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Utilidad</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value=".30" type="number" placeholder="MXM" class="form-control input-lg utilidad" min="" step="any" id="b" name="b">

                </div>

              </div>

              <!-- Comision -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Comision</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value="4" type="number" placeholder="MXM" class="form-control input-lg comision" min="" step="any" id="c" name="c">

              </div>
             </div>

              <!-- Multiplicacion de la utilidad mas la comision -->

              <div class="col-md-4 col-xs-12" style="display: none">

                <div class="panel">Multiplicacion de la utilidad mas la comision</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value="" type="number" placeholder="MXM" class="form-control input-lg comision" min="" step="any" id="w" name="w">

                </div>

              </div>

              <!-- Comision Paypal -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Comision Paypal</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value=".04" type="number" placeholder="MXM" class="form-control input-lg paypal" min="" step="any" id="d" name="d">

                </div>

              </div>
              <!-- Comision multiplicacionde resultado po paypal -->

              <div class="col-md-4 col-xs-12"  style="display: none">

                <div class="panel">multiplicacionde resultado po paypal</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value="" type="number" placeholder="MXM" class="form-control input-lg paypal" min="" step="any" id="x" name="x">

                </div>

              </div>

              <!-- Precio -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Precio</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg precio" min="" step="any" value="y" placeholder="" id="y" name="y">

                </div>

              </div>

              <!-- ANCHO -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">ANCHO</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg ancho" min="" step="any" value="" placeholder="cm" id="l" name="l">

                </div>

              </div>

              <!-- ALTURA -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">ALTURA</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg altura" min="" step="any" value="" placeholder="cm" id="m" name="m">

                </div>

              </div>

              <!-- LARGO -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">LARGO</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg largo" min="" step="any" value="" placeholder="cm" id="n" name="n">

                </div>

              </div>

              <!-- pesoV -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Valor Volumetrico</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg peso" min="" step="any" value="" placeholder="cm" id="z" name="z">

                </div>

              </div>

              <!-- stock -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">stock</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>

                  <input type="number" class="form-control input-lg stock" min="" value="" placeholder="Cantidad">

                </div>

              </div>


              <!-- ENTREGA -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">DÍAS DE ENTREGA</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-truck"></i></span>

                  <input type="number" class="form-control input-lg entrega" min="0" value="0">

                </div>

              </div>

            </div>

            <!--=====================================
            AGREGAR OFERTAS
            ======================================-->

            <div class="form-group">

              <select class="form-control input-lg selActivarOferta">

                <option value="">No tiene oferta</option>
                <option value="oferta">Activar oferta</option>

              </select>

            </div>

            <div class="datosOferta" style="display:none">

              <!--=====================================
              VALOR OFERTAS
              ======================================-->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                    <input class="form-control input-lg valorOferta precioOferta" tipo="oferta" type="number" value="0"   min="0" placeholder="Precio">

                  </div>

                </div>

                <div class="col-xs-6">

                  <div class="input-group">

                    <input class="form-control input-lg valorOferta descuentoOferta" tipo="descuento" type="number" value="0"  min="0" placeholder="Descuento">
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>

              </div>

              <!--=====================================
              FECHA FINALIZACIÓN OFERTA
              ======================================-->

              <div class="form-group">

                <div class="input-group date">

                  <input type='text' class="form-control datepicker input-lg valorOferta finOferta">

                  <span class="input-group-addon">

                      <span class="glyphicon glyphicon-calendar"></span>

                  </span>

                </div>

              </div>

              <!--=====================================
              FOTO OFERTA
              ======================================-->

              <div class="form-group">

                <div class="panel">SUBIR FOTO OFERTA</div>

                <input type="file" class="fotoOferta valorOferta">

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

          <button type="button" class="btn btn-primary guardarProducto">Guardar producto</button>

        </div>

       </form>

    </div>
  </div>
</div>


<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">

   <div class="modal-dialog">

      <div class="modal-content">
        <form role="form" method="post" enctype="multipart/form-data"  oninput="w.value=parseInt(a.value)*(b.value)+parseInt(c.value),x.value=parseInt(w.value)+parseInt(a.value)*(d.value),y.value=parseInt(a.value)+parseInt(x.value),z.value=(l.value)*(m.value)*(n.value)/500">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!--=====================================
            ENTRADA PARA EL TÍTULO
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                  <input type="text" class="form-control input-lg validarProducto tituloProducto" readonly>

                  <input type="hidden" class="idProducto">
                  <input type="hidden" class="idCabecera">

                </div>

            </div>

            <!--=====================================
            ENTRADA PARA LA RUTA DEL PRODUCTO
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-link"></i></span>

                  <input type="text" class="form-control input-lg rutaProducto" readonly>

                </div>

            </div>

           <!--=====================================
            ENTRADA PARA SELECCIONAR EL TIPO DEL PRODUCTO
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span>

                   <input type="text" class="form-control input-lg seleccionarTipo" readonly>

                </div>

            </div>

            <!--=====================================
            ENTRADA PARA AGREGAR MULTIMEDIA
            ======================================-->

            <div class="form-group agregarMultimedia">

              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO VIRTUAL
              ======================================-->

              <div class="input-group multimediaVirtual" style="display:none">

                <span class="input-group-addon"><i class="fa fa-youtube-play"></i></span>

                 <input type="text" class="form-control input-lg multimedia">

              </div>

              <!--=====================================
              SUBIR MULTIMEDIA DE PRODUCTO FÍSICO
              ======================================-->

            <div class="row previsualizarImgFisico"></div>

              <div class="multimediaFisica needsclick dz-clickable" style="display:none">

                <div class="dz-message needsclick">

                  Arrastrar o dar click para subir imagenes.

                </div>

              </div>

            </div>

            <!--=====================================
            AGREGAR DETALLES VIRTUALES
            ======================================

            <div class="detallesVirtual" style="display:none">

              <div class="panel">DETALLES</div>

                 CLASES

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Clases" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleClases" placeholder="Descripción">
                  </div>

                </div>

                 TIEMPO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Tiempo" readonly>
                  </div>

                  <div class="col-xs-9">
                    <input type="text" class="form-control input-lg detalleTiempo" placeholder="Descripción">
                  </div>

                </div>

                NIVEL

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Nivel" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleNivel" placeholder="Descripción">
                  </div>

                </div>

                 ACCESO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Acceso" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleAcceso" placeholder="Descripción">
                  </div>

                </div>

                 DISPOSITIVO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Dispositivo" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleDispositivo" placeholder="Descripción">
                  </div>

                </div>

                 CERTIFICADO

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Certificado" readonly>
                  </div>

                  <div class="col-xs-9">
                      <input type="text" class="form-control input-lg detalleCertificado" placeholder="Descripción">
                  </div>

                </div>
            </div>-->

            <!--=====================================
            AGREGAR DETALLES FÍSICOS
            ======================================-->

            <div class="detallesFisicos" style="display:none">

              <div class="panel">DETALLES</div>

              <!-- TALLA

                <div class="form-group row">

                  <div class="col-xs-3">
                    <input class="form-control input-lg" type="text" value="Volumen" readonly>
                  </div>

                  <div class="col-xs-9">
                    <input class="form-control input-lg tagsInput detalleTalla" data-role="tagsinput" type="text" placeholder="Separe valores con coma">
                  </div>

              </div>-->


              <!-- COLOR -->

              <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Color" readonly>
                </div>

                <div class="col-xs-9 editarColor">
                  <!--   <input class="form-control input-lg tagsInput detalleColor" data-role="tagsinput" type="text" placeholder="Separe valores con coma"> -->
                </div>

              </div>

              <!-- MARCA -->

              <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Marca" readonly>
                </div>

                <div class="col-xs-9 editarMarca">
                  <!--   <input class="form-control input-lg tagsInput detalleMarca" data-role="tagsinput" type="text" placeholder="Separe valores con coma"> -->
                </div>

              </div>

              <!-- Medidas -->

<!--               <div class="form-group row">

                <div class="col-xs-3">
                  <input class="form-control input-lg" type="text" value="Medidas" readonly>
                </div>

                <div class="col-xs-9 editarMedidas">
                    <input class="form-control input-lg tagsInput detalleMedidas" data-role="tagsinput" type="text" placeholder="Separe valores con coma">
                </div>

              </div> -->

            </div>

           <!--=====================================
            AGREGAR CATEGORÍA
            ======================================-->

            <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg seleccionarCategoria">

                    <option class="optionEditarCategoria"></option>

                    <?php

                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                    foreach ($categorias as $key => $value) {

                      echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                    }

                    ?>

                  </select>

                </div>

            </div>

            <!--=====================================
            AGREGAR SUBCATEGORÍA
            ======================================-->

            <div class="form-group entradaSubcategoria">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg seleccionarSubCategoria">

                    <option class="optionEditarSubCategoria"></option>

                  </select>

                </div>

            </div>

            <!--=====================================
            AGREGAR SUBCATEGORÍA2
            ======================================-->

            <div class="form-group entradaSubcategoria2">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <select class="form-control input-lg seleccionarSubCategoria2">

                    <option class="optionEditarSubCategoria2"></option>

                  </select>

                </div>

            </div>

           <!--=====================================
            AGREGAR DESCRIPCIÓN
            ======================================-->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>

                <textarea type="text" maxlength="1000" rows="6" class="form-control input-lg descripcionProducto"></textarea>

              </div>

            </div>

            <!--=====================================
            AGREGAR PALABRAS CLAVES
            ======================================-->

            <div class="form-group editarPalabrasClaves">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg tagsInput pClavesProducto" data-role="tagsinput"  placeholder="Ingresar palabras claves">

                </div>
            </div>

            <!--=====================================
            AGREGAR FOTO DE PORTADA
            ======================================

            <div class="form-group">

              <div class="panel">SUBIR FOTO PORTADA</div>

              <input type="file" class="fotoPortada">
              <input type="hidden" class="antiguaFotoPortada">

              <p class="help-block">Tamaño recomendado 1280px * 720px <br> Peso máximo de la foto 2MB</p>

              <img src="vistas/img/cabeceras/default/default.jpg" class="img-thumbnail previsualizarPortada" width="100%">

            </div>-->

            <!--=====================================
            AGREGAR FOTO DE MULTIMEDIA
            ======================================-->

            <div class="form-group">

              <div class="panel">SUBIR FOTO PRINCIPAL DEL PRODUCTO</div>

              <input type="file" class="fotoPrincipal">
              <input type="hidden" class="antiguaFotoPrincipal">

              <p class="help-block">Tamaño recomendado 400px * 450px <br> Peso máximo de la foto 2MB</p>

              <img src="vistas/img/productos/default/default.jpg" class="img-thumbnail previsualizarPrincipal" width="200px">

            </div>

            <!--=====================================
            AGREGAR PRECIO, PESO Y ENTREGA
            ======================================-->

            <div class="form-group row">

              <!-- Costo -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Costo</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input type="number" placeholder="MXM" class="form-control input-lg costo" min="" step="any"  id="a" name="a">

                </div>

              </div>

              <!-- Utilidad -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Utilidad</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value=".30" type="number" placeholder="MXM" class="form-control input-lg utilidad" min="" step="any" id="b" name="b">

                </div>

              </div>

              <!-- Comision -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Comision</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value="4" type="number" placeholder="MXM" class="form-control input-lg comision" min="" step="any" id="c" name="c">

              </div>
             </div>

              <!-- Multiplicacion de la utilidad mas la comision -->

              <div class="col-md-4 col-xs-12" style="display: none">

                <div class="panel">Multiplicacion de la utilidad mas la comision</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value="" type="number" placeholder="MXM" class="form-control input-lg comision" min="" step="any" id="w" name="w">

                </div>

              </div>

              <!-- Comision Paypal -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Comision Paypal</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value=".04" type="number" placeholder="MXM" class="form-control input-lg paypal" min="" step="any" id="d" name="d">

                </div>

              </div>
              <!-- Comision multiplicacionde resultado po paypal -->

              <div class="col-md-4 col-xs-12"  style="display: none">

                <div class="panel">multiplicacionde resultado po paypal</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                  <input value="" type="number" placeholder="MXM" class="form-control input-lg paypal" min="" step="any" id="x" name="x">

                </div>

              </div>

              <!-- Precio -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Precio

                </div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg precio" min="" step="any" value="" placeholder="" id="y" name="y">

                </div>

              </div>

              <!-- ANCHO -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">ANCHO</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg ancho" min="" step="any" value="" placeholder="cm" id="l" name="l">

                </div>

              </div>

              <!-- ALTURA -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">ALTURA</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg altura" min="" step="any" value="" placeholder="cm" id="m" name="m">

                </div>

              </div>

              <!-- LARGO -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">LARGO</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg largo" min="" step="any" value="" placeholder="cm" id="n" name="n">

                </div>

              </div>

              <!-- pesoV -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">Valor Volumetrico</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>

                  <input type="number" class="form-control input-lg peso" min="" step="any" value="" placeholder="cm" id="z" name="z">

                </div>

              </div>

              <!-- stock -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">stock</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>

                  <input type="number" class="form-control input-lg stock" min="0" value="0">

                </div>

              </div>
              <!-- ENTREGA -->

              <div class="col-md-4 col-xs-12">

                <div class="panel">DÍAS DE ENTREGA</div>

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-truck"></i></span>

                  <input type="number" class="form-control input-lg entrega" min="0" value="0">

                </div>

              </div>

            </div>

            <!--=====================================
            AGREGAR OFERTAS
            ======================================-->

            <div class="form-group">

              <select class="form-control input-lg selActivarOferta">

                <option value="">No tiene oferta</option>
                <option value="oferta">Activar oferta</option>

              </select>

            </div>

            <div class="datosOferta" style="display:none">

              <!--=====================================
              VALOR OFERTAS
              ======================================-->

              <div class="form-group row">

                <div class="col-xs-6">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                    <input class="form-control input-lg valorOferta precioOferta" tipo="oferta" type="number" value="0" min="0" placeholder="Precio">

                  </div>

                </div>

                <div class="col-xs-6">

                  <div class="input-group">

                    <input class="form-control input-lg valorOferta descuentoOferta" tipo="descuento" type="number" value="0"  min="0" placeholder="Descuento">
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>

              </div>

              <!--=====================================
              FECHA FINALIZACIÓN OFERTA
              ======================================-->

              <div class="form-group">

                <div class="input-group date">

                  <input type='text' class="form-control datepicker input-lg valorOferta finOferta">

                  <span class="input-group-addon">

                      <span class="glyphicon glyphicon-calendar"></span>

                  </span>

                </div>

              </div>

              <!--=====================================
              FOTO OFERTA
              ======================================-->

              <div class="form-group">

                <div class="panel">SUBIR FOTO OFERTA</div>

                <input type="file" class="fotoOferta valorOferta">
                <input type="hidden" class="antiguaFotoOferta">

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

          <div class="preload"></div>

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" class="btn btn-primary guardarCambiosProducto">Guardar cambios</button>

        </div>

          </form>
     </div>

   </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>