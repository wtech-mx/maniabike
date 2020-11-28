<?php

    $url = Ruta::ctrRuta();

 ?>

<!--=====================================
BREADCRUMB CARRITO DE COMPRAS
======================================-->

<div class="container-fluid well well-sm">

	<div class="container">

		<div class="row">

			<ul class="breadcrumb fondoBreadcrumb text-uppercase">

				<li><a href="<?php echo $url;  ?>">CARRITO DE COMPRAS</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>

			</ul>

		</div>

	</div>

</div>

<!--=====================================
TABLA CARRITO DE COMPRAS
======================================-->

<div class="container-fluid">

	<div class="container">

		<div class="panel panel-default">

			<!--=====================================
			CABECERA CARRITO DE COMPRAS
			======================================-->

			<div class="panel-heading cabeceraCarrito">

				<div class="col-md-6 col-sm-7 col-xs-12 text-center">

					<h3>
						<small>PRODUCTO</small>
					</h3>

				</div>

				<div class="col-md-2 col-sm-1 col-xs-0 text-center">

					<h3>
						<small>PRECIO</small>
					</h3>

				</div>

				<div class="col-sm-2 col-xs-0 text-center">

					<h3>
						<small>CANTIDAD</small>
					</h3>

				</div>

				<div class="col-sm-2 col-xs-0 text-center">

					<h3>
						<small>SUBTOTAL</small>
					</h3>

				</div>

			</div>

			<!--=====================================
			CUERPO CARRITO DE COMPRAS
			======================================-->

			<div class="panel-body cuerpoCarrito">



			</div>

			<!--=====================================
			SUMA DEL TOTAL DE PRODUCTOS
			======================================-->

			<div class="panel-body sumaCarrito">

				<div class="col-md-4 col-sm-6 col-xs-12 pull-right well">

					<div class="col-xs-6">

						<h4>TOTAL:</h4>

					</div>

					<div class="col-xs-6">

						<h4 class="sumaSubTotal">



						</h4>

					</div>

				</div>

			</div>

			<!--=====================================
			BOTÓN CHECKOUT
			======================================-->

			<div class="panel-heading cabeceraCheckout">

			<?php

				if(isset($_SESSION["validarSesion"])){

					if($_SESSION["validarSesion"] == "ok"){

						echo '<a id="btnCheckout" href="#modalCheckout" data-toggle="modal" idUsuario="'.$_SESSION["id"].'"><button class="btn btn-default backColor btn-lg pull-right">REALIZAR PAGO</button></a>';

					}


				}else{

					echo '<a href="#modalIngreso" data-toggle="modal"><button class="btn btn-default backColor btn-lg pull-right">REALIZAR PAGO</button></a>';
				}

			?>

			</div>

		</div>

	</div>

</div>

<!--=====================================
VENTANA MODAL PARA CHECKOUT
======================================-->

<div id="modalCheckout" class="modal fade modalFormulario" role="dialog">

	 <div class="modal-content modal-dialog">

		<div class="modal-body modalTitulo">

			<h3 class="backColor">REALIZAR PAGO</h3>

			<button type="button" class="close" data-dismiss="modal">&times;</button>

			<div class="contenidoCheckout">

				<?php

				$respuesta = ControladorCarrito::ctrMostrarTarifas();

				echo '<input type="hidden" id="tasaImpuesto" value="'.$respuesta["impuesto"].'">
					  <input type="hidden" id="envioNacional" value="'.$respuesta["envioNacional"].'">
				      <input type="hidden" id="envioInternacional" value="'.$respuesta["envioInternacional"].'">
				      <input type="hidden" id="tasaMinimaNal" value="'.$respuesta["tasaMinimaNal"].'">
				      <input type="hidden" id="tasaMinimaInt" value="'.$respuesta["tasaMinimaInt"].'">
				      <input type="hidden" id="tasaPais" value="'.$respuesta["pais"].'">

				';

				?>


<!--				<div class="formEnvio row">

					<h4 class="text-center well text-muted text-uppercase">Recoger en Tienda</h4>

                    <div class="col-xs-12">
                        <select class="form-control" id="inputGroupSelect01">
                        <option selected value="0">No</option>
                        <option value="1">Si</option>
                      </select>
                    </div>


                    <div class="card text-center p-3">
                        <br>
                      <div class="card-body">
                          <br>
                          <h5 class="card-title">Ubicacion de Tienda</h5>
                        <img  src="<?php echo $url; ?>vistas/img/plantilla/negocio.jpg" class="img-thumbnail" width="25%">

                      </div>
                      <div class="card-footer text-muted">
                       <a class="btn btn-primary " target="blank" href="https://goo.gl/maps/JmMCr7BKAHQxrTi77" title="" style="color: #fff;">Ver Direccion</a>
                      </div>
                    </div>

				</div> -->

				<div class="formEnvio row">

					<h4 class="text-center well text-muted text-uppercase">Información de envío <br>Seleccionar en caso de ser envio </h4>

					<div class="col-xs-12 seleccionePais">

					</div>

				</div>

				<br>

				<div class="formaPago row">

					<h4 class="text-center well text-muted text-uppercase">Elige la forma de pago</h4>

					<figure class="col-xs-6">

						<center>

							<input id="checkPaypal" type="radio" name="pago" value="paypal" checked>

						</center>

						<img src="<?php echo $url; ?>vistas/img/plantilla/paypal.jpg" class="img-thumbnail">

					</figure>

<!--					<figure class="col-xs-6">-->
<!---->
<!--						<center>-->
<!---->
<!--							<input id="checkPayu" type="radio" name="pago" value="payu">-->
<!---->
<!--						</center>-->
<!---->
<!--						<img src="--><?php //echo $url; ?><!--vistas/img/plantilla/payu.jpg" class="img-thumbnail">-->
<!---->
<!--					</figure>-->
                    <figure class="col-xs-6">

						<center>

							<input id="checkMp" type="radio" name="pago" value="mp">

						</center>

						<img src="<?php echo $url; ?>vistas/img/plantilla/payu.jpg" class="img-thumbnail">

					</figure>

				</div>



                <br>


			                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="text-center well text-muted text-uppercase">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>  Elige dónde recibir tus compras
                            </a>

                            </h4>
                        </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                <div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCodigo">C. Postal:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								      <input type="text" class="form-control" id="editarCodigo" name="editarCodigo" value="<?php echo $_SESSION["codigo"] ?>" readonly>
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarEstado">Estado:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="fa fa-street-view" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarEstado" name="editarEstado"  value="<?php echo $_SESSION["estado"] ?>" readonly>
								    </div>
								  </div>

								</div>

								<div class="row">
                                     <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarColonia">Colonia:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-mouse-pointer" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarColonia" name="editarColonia" value="<?php echo $_SESSION["colonia"] ?>" readonly>
								    </div>
								  </div>

								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle">Calle:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle" name="editarCalle" value="<?php echo $_SESSION["calle"] ?>" readonly>
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarExterior">Numero Exterior:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarExterior" name="editarExterior" value="<?php echo $_SESSION["exterior"] ?>" readonly>
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarInterior">Numero Interior:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarInterior" name="editarInterior" value="<?php echo  $_SESSION["interior"] ?>" readonly>
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle1">Entre Calle1:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-exchange" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle1" name="editarCalle1" value="<?php echo $_SESSION["calle1"] ?>" readonly>
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle2">Entre Calle 2:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-exchange" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle2" name="editarCalle2" value="<?php echo $_SESSION["calle2"] ?>" readonly>
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase" for="editarDescripcion">Descripcion:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarDescripcion" name="editarDescripcion" value="<?php echo $_SESSION["descripcion"] ?>" readonly>
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12 text-center"><br>
								  	<a href="http://localhost/maniabike/frontend/perfil" class="btn btn-success"> EDITAR EN PERFIL</a>
								  </div>
								</div>



                                </div>
                            </div>
                    </div>
                </div>


				<br>

				<div class="listaProductos row">

					<h4 class="text-center well text-muted text-uppercase">Productos a comprar</h4>

					<table class="table table-striped tablaProductos">

						 <thead>

							<tr>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Precio</th>
							</tr>

						 </thead>

						 <tbody>



						 </tbody>

					</table>

					<div class="col-sm-6 col-xs-12 pull-right">

						<table class="table table-striped tablaTasas">

							<tbody>

								<tr>
									<td>Subtotal</td>
									<td><span class="cambioDivisa">MXN</span> $<span class="valorSubtotal" valor="0">0</span></td>
								</tr>

								<tr>
									<td>Envío</td>
									<td><span class="cambioDivisa">MXN</span> $<span class="valorTotalEnvio" valor="0">0</span></td>
								</tr>

								<tr>
									<td>Impuesto</td>
									<td><span class="cambioDivisa">MXN</span> $<span class="valorTotalImpuesto" valor="0">0</span></td>
								</tr>

								<tr>
									<td><strong>Total</strong></td>
									<td><strong><span class="cambioDivisa">MXN</span> $<span class="valorTotalCompra" valor="0">0</span></strong></td>
								</tr>

							</tbody>

						</table>

						 <div class="divisa">

						 	<select class="form-control" id="cambiarDivisa" name="divisa">



						 	</select>

						 	<br>

						 </div>

					</div>

					<div class="clearfix"></div>

					<form class="formPayu" style="display:none">

						<input name="merchantId" type="hidden" value=""/>
						<input name="accountId" type="hidden" value=""/>
						<input name="description" type="hidden" value=""/>
						<input name="referenceCode" type="hidden" value=""/>
						<input name="amount" type="hidden" value=""/>
						<input name="tax" type="hidden" value=""/>
						<input name="taxReturnBase" type="hidden" value=""/>
						<input name="shipmentValue" type="hidden" value=""/>
						<input name="currency" type="hidden" value=""/>
						<input name="lng" type="hidden" value="es"/>
						<input name="confirmationUrl" type="hidden" value="" />
						<input name="responseUrl" type="hidden" value=""/>
						<input name="declinedResponseUrl" type="hidden" value=""/>
						<input name="displayShippingInformation" type="hidden" value=""/>
						<input name="test" type="hidden" value="" />
						<input name="signature" type="hidden" value=""/>

					  <input name="Submit" class="btn btn-block btn-lg btn-default backColor" type="submit"  value="PAGAR" >
					</form>

					<button class="btn btn-block btn-lg btn-default backColor btnPagar">PAGAR</button>

               <!--=====================================
                Mercado Pago
                ======================================-->
                 <div class="col-12">
                    <form action="<?php echo $ruta.'carrito-de-compras'; ?>" method="POST">
                      <script
                        src="https://www.mercadopago.com.mx/integrations/v1/web-tokenize-checkout.js"
                        data-public-key="TEST-2e75a20b-7f8b-48cf-b956-404cc16c600e"
                        data-transaction-amount="100">
                      </script>
                    </form>
                        <?php
                        if (isset($_REQUEST["token"])){


                          $token = $_REQUEST["token"];
                          $payment_method_id = $_REQUEST["payment_method_id"];
                          $installments = $_REQUEST["installments"];
                          $issuer_id = $_REQUEST["issuer_id"];

                            MercadoPago\SDK::setAccessToken("TEST-4584303899483220-112723-e8f21bba312541423e9a04ae5a94a127-236513607");

                            $payment = new MercadoPago\Payment();
                            $payment->transaction_amount = 100.00;
                            $payment->token = $token;
                            $payment->description = "Coa de aluminio ligerot";
                            $payment->installments = $installments;
                            $payment->payment_method_id = $payment_method_id;
                            $payment->issuer_id = $issuer_id;
                            $payment->payer = array(
                            "email" => "abelardo@gmail.com"
                            );
                            // Guarda y postea el pago
                            $payment->save();
                            // Imprime el estado del pago
                            echo $payment->status;

                            if ($payment->status == "approved"){

                            }

                        }
                        ?>

                 </div>
                <!--Fin mercado pago-->
				</div>

			</div>

		</div>

		<div class="modal-footer">

      	</div>

	</div>

</div>
