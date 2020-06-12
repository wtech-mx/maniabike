<!--=====================================
VALIDAR SESIÓN
======================================-->

<?php

$url = Ruta::ctrRuta();
$servidor = Ruta::ctrRutaServidor();

if(!isset($_SESSION["validarSesion"])){

	echo '<script>

		window.location = "'.$url.'";

	</script>';

	exit();

}

?>

<!--=====================================
BREADCRUMB PERFIL
======================================-->

<div class="container-fluid well well-sm">

	<div class="container">

		<div class="row">

			<ul class="breadcrumb fondoBreadcrumb text-uppercase">

				<li><a href="<?php echo $url;  ?>">INICIO</a></li>
				<li class="active pagActiva"><?php echo $rutas[0] ?></li>

			</ul>

		</div>

	</div>

</div>

<!--=====================================
SECCIÓN PERFIL
======================================-->

<div class="container-fluid">

	<div class="container">

		<ul class="nav nav-tabs">

	  		<li class="active">
			  	<a data-toggle="tab" href="#compras">
			  	<i class="fa fa-list-ul"></i> MIS COMPRAS</a>
	  		</li>

	  		<li>
		  		<a data-toggle="tab" href="#deseos">
		  		<i class="fa fa-gift"></i> MI LISTA DE DESEOS</a>
	  		</li>

	  		<li>
	  			<a data-toggle="tab" href="#perfil">
	  			<i class="fa fa-user"></i> EDITAR PERFIL</a>
	  		</li>

	  		<li>
		 	 	<a href="<?php echo $url; ?>ofertas">
		 	 	<i class="fa fa-star"></i>	VER OFERTAS</a>
	  		</li>

		</ul>

		<div class="tab-content">

			<!--=====================================
			PESTAÑA COMPRAS
			======================================-->

	  		<div id="compras" class="tab-pane fade in active">

				<div class="panel-group">

				<?php

					$item = "id_usuario";
					$valor = $_SESSION["id"];

					$compras = ControladorUsuarios::ctrMostrarCompras($item, $valor);

					if(!$compras){

						echo '<div class="col-xs-12 text-center error404">

				    		<h1><small>¡Oops!</small></h1>

				    		<h2>Aún no tienes compras realizadas en esta tienda</h2>

				  		</div>';

					}else{

						foreach ($compras as $key => $value1) {

							$ordenar = "id";
							$item = "id";
							$valor = $value1["id_producto"];

							$productos = ControladorProductos::ctrListarProductos($ordenar, $item, $valor);

							foreach ($productos as $key => $value2) {

								echo '<div class="panel panel-default">

									    <div class="panel-body">

											<div class="col-md-2 col-sm-6 col-xs-12">

												<figure>

													<img class="img-thumbnail" src="'.$servidor.$value2["portada"].'">

												</figure>

											</div>

											<div class="col-sm-6 col-xs-12">

												<h1><small>'.$value2["titulo"].'</small></h1>

												<p>'.$value2["titular"].'</p>';

												if($value2["tipo"] == "virtual"){

													echo '<a href="'.$url.'/curso">
														<button class="btn btn-default pull-left">Ir al curso</button>
														</a>';

												}else{

													echo '<h6>Proceso de entrega: '.$value2["entrega"].' días hábiles</h6>';

													if($value1["envio"] == 0){

														echo '<div class="progress">

															<div class="progress-bar progress-bar-info" role="progressbar" style="width:33.33%">
																<i class="fa fa-check"></i> Despachado
															</div>

															<div class="progress-bar progress-bar-default" role="progressbar" style="width:33.33%">
																<i class="fa fa-clock-o"></i> Enviando
															</div>

															<div class="progress-bar progress-bar-success" role="progressbar" style="width:33.33%">
																<i class="fa fa-clock-o"></i> Entregado
															</div>

														</div>';

													}

													if($value1["envio"] == 1){

														echo '<div class="progress">

															<div class="progress-bar progress-bar-info" role="progressbar" style="width:33.33%">
																<i class="fa fa-check"></i> Despachado
															</div>

															<div class="progress-bar progress-bar-default" role="progressbar" style="width:33.33%">
																<i class="fa fa-check"></i> Enviando
															</div>

															<div class="progress-bar progress-bar-success" role="progressbar" style="width:33.33%">
																<i class="fa fa-clock-o"></i> Entregado
															</div>

														</div>';

													}

													if($value1["envio"] == 2){

														echo '<div class="progress">

															<div class="progress-bar progress-bar-info" role="progressbar" style="width:33.33%">
																<i class="fa fa-check"></i> Despachado
															</div>

															<div class="progress-bar progress-bar-default" role="progressbar" style="width:33.33%">
																<i class="fa fa-check"></i> Enviando
															</div>

															<div class="progress-bar progress-bar-success" role="progressbar" style="width:33.33%">
																<i class="fa fa-check"></i> Entregado
															</div>

														</div>';

													}

												}


													if($value1["envio"] == 3){

														echo '<div class="progress">


															<div class="progress-bar progress-bar-warning" role="progressbar" style="width:50.0%">
																<i class="fa fa-check"></i>Despachado
															</div>

															<div class="progress-bar progress-bar-danger" role="progressbar" style="width:50.0%">
																<i class="fa fa-clock-o"></i> Recojer en tienda
															</div>

														</div>';

													}

													if($value1["envio"] == 4){

														echo '<div class="progress">


															<div class="progress-bar progress-bar-warning" role="progressbar" style="width:50.0%">
																<i class="fa fa-check"></i>Despachado
															</div>

															<div class="progress-bar progress-bar-danger" role="progressbar" style="width:50.0%">
																<i class="fa fa-check"></i> Recojer en tienda
															</div>


														</div>';

													}

												echo '<h4 class="pull-right"><small>Comprado el '.substr($value1["fecha"],0,-8).'</small></h4>


											</div>

											<div class="col-md-4 col-xs-12">';

											$datos = array("idUsuario"=>$_SESSION["id"],
															"idProducto"=>$value2["id"] );

											$comentarios = ControladorUsuarios::ctrMostrarComentariosPerfil($datos);


												echo '<div class="pull-right">

													<a class="calificarProducto" href="#modalComentarios" data-toggle="modal" idComentario="'.$comentarios["id"].'">

														<button class="btn btn-default backColor">Calificar Producto</button>

													</a>

												</div>

												<br><br>

												<div class="pull-right">

													<h3 class="text-right">';

													if($comentarios["calificacion"] == 0 && $comentarios["comentario"] == ""){

														echo '<i class="fa fa-star-o text-success" aria-hidden="true"></i>
																<i class="fa fa-star-o text-success" aria-hidden="true"></i>
																<i class="fa fa-star-o text-success" aria-hidden="true"></i>
																<i class="fa fa-star-o text-success" aria-hidden="true"></i>
																<i class="fa fa-star-o text-success" aria-hidden="true"></i>';

													}else{

														switch($comentarios["calificacion"]){

															case 0.5:
															echo '<i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 1.0:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 1.5:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 2.0:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 2.5:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 3.0:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 3.5:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 4.0:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-o text-success" aria-hidden="true"></i>';
															break;

															case 4.5:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>';
															break;

															case 5.0:
															echo '<i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>
																  <i class="fa fa-star text-success" aria-hidden="true"></i>';
															break;

														}


													}


													echo '</h3>


													<p class="panel panel-default text-right" style="padding:5px">

														<small>

														'.$comentarios["comentario"].'

														</small>


													</p>

												</div>

											</div>

									    </div>

									</div>';

							}

						}
					}
				?>



				</div>

		  	</div>

		  	<!--=====================================
			PESTAÑA DESEOS
			======================================-->

		  	<div id="deseos" class="tab-pane fade">

			<?php

				$item = $_SESSION["id"];

				$deseos = ControladorUsuarios::ctrMostrarDeseos($item);

				if(!$deseos){

					echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center error404">

			    		<h1><small>¡Oops!</small></h1>

			    		<h2>Aún no tiene productos en su lista de deseos</h2>

			  		</div>';

				}else{

					foreach ($deseos as $key => $value1) {

						$ordenar = "id";
						$valor = $value1["id_producto"];
						$item = "id";

						$productos = ControladorProductos::ctrListarProductos($ordenar, $item, $valor);

						echo '<ul class="grid0">';

							foreach ($productos as $key => $value2) {

							echo '<li class="col-md-3 col-sm-6 col-xs-12">

									<figure>

										<a href="'.$url.$value2["ruta"].'" class="pixelProducto">

											<img src="'.$servidor.$value2["portada"].'" class="img-responsive">

										</a>

									</figure>

									<h4>

										<small>

											<a href="'.$url.$value2["ruta"].'" class="pixelProducto">

												'.$value2["titulo"].'<br>

												<span style="color:rgba(0,0,0,0)">-</span>';

												if($value2["nuevo"] != 0){

													echo '<span class="label label-warning fontSize">Nuevo</span> ';

												}

												if($value2["oferta"] != 0){

													echo '<span class="label label-warning fontSize">'.$value2["descuentoOferta"].'% off</span>';

												}

											echo '</a>

										</small>

									</h4>

									<div class="col-xs-6 precio">';

									if($value2["precio"] == 0){

										echo '<h2 style="margin-top:-10px"><small>GRATIS</small></h2>';

									}else{

										if($value2["oferta"] != 0){

											echo '<h2 style="margin-top:-10px">

													<small>

														<strong class="oferta" style="font-size:12px">MXN $'.$value2["precio"].'</strong>

													</small>

													<small>$'.$value2["precioOferta"].'</small>

												</h2>';

										}else{

											echo '<h2 style="margin-top:-10px"><small>MXN $'.$value2["precio"].'</small></h2>';

										}

									}

									echo '</div>

									<div class="col-xs-6 enlaces">

										<div class="btn-group pull-right">

											<button type="button" class="btn btn-danger btn-xs quitarDeseo" idDeseo="'.$value1["id"].'" data-toggle="tooltip" title="Quitar de mi lista de deseos">

												<i class="fa fa-heart" aria-hidden="true"></i>

											</button>';

											if($value2["tipo"] == "virtual" && $value2["precio"] != 0){

												if($value2["oferta"] != 0){

													echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value2["id"].'" imagen="'.$servidor.$value2["portada"].'" titulo="'.$value2["titulo"].'" precio="'.$value2["precioOferta"].'" tipo="'.$value2["tipo"].'" peso="'.$value2["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

													<i class="fa fa-shopping-cart" aria-hidden="true"></i>

													</button>';

												}else{

													echo '<button type="button" class="btn btn-default btn-xs agregarCarrito"  idProducto="'.$value2["id"].'" imagen="'.$servidor.$value2["portada"].'" titulo="'.$value2["titulo"].'" precio="'.$value2["precio"].'" tipo="'.$value2["tipo"].'" peso="'.$value2["peso"].'" data-toggle="tooltip" title="Agregar al carrito de compras">

													<i class="fa fa-shopping-cart" aria-hidden="true"></i>

													</button>';

												}

											}

											echo '<a href="'.$url.$value2["ruta"].'" class="pixelProducto">

												<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ver producto">

													<i class="fa fa-eye" aria-hidden="true"></i>

												</button>

											</a>

										</div>

									</div>

								</li>';
							}

						echo '</ul>';


					}

				}

			?>


		  	</div>

			<!--=====================================
			PESTAÑA PERFIL
			======================================-->

		  	<div id="perfil" class="tab-pane fade">

				<div class="row">

					<form method="post" enctype="multipart/form-data">

						<div class="col-md-3 col-sm-4 col-xs-12 text-center">

							<br>

							<figure id="imgPerfil">

							<?php

							echo '<input type="hidden" value="'.$_SESSION["id"].'" id="idUsuario" name="idUsuario">
							      <input type="hidden" value="'.$_SESSION["password"].'" name="passUsuario">
							      <input type="hidden" value="'.$_SESSION["foto"].'" name="fotoUsuario" id="fotoUsuario">
							      <input type="hidden" value="'.$_SESSION["modo"].'" name="modoUsuario" id="modoUsuario">';


							if($_SESSION["modo"] == "directo"){

								if($_SESSION["foto"] != ""){

									echo '<img src="'.$url.$_SESSION["foto"].'" class="img-thumbnail">';

								}else{

									echo '<img src="'.$servidor.'vistas/img/usuarios/default/anonymous.png" class="img-thumbnail">';

								}


							}else{

								echo '<img src="'.$_SESSION["foto"].'" class="img-thumbnail">';
							}

							?>

							</figure>

							<br>

							<?php

							if($_SESSION["modo"] == "directo"){

							echo '<button type="button" class="btn btn-default" id="btnCambiarFoto">

									Cambiar foto de perfil

									</button>';

							}

							?>

							<div id="subirImagen">

								<input type="file" class="form-control" id="datosImagen" name="datosImagen">

								<img class="previsualizar">

							</div>

						</div>

						<div class="col-md-9 col-sm-8 col-xs-12">

						<br>



						<?php

						if($_SESSION["verificacion"] == 1){



							echo '<h1>Datos de cuenta RS</h1>



								<div class="row">
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarNombre">Cambiar Nombre:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      <input type="text" class="form-control"  value="'.$_SESSION["nombre"].'" readonly>
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarEmail">Cambiar Correo Electrónico:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								     <input type="text" class="form-control"  value="'.$_SESSION["email"].'" readonly>
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarNumero">Numero:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								     <input type="text" class="form-control" id="editarNumero" name="editarNumero" value="'.$_SESSION["Numero"].'">
								    </div>
								  </div>
								</div>



								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase" for="editarPassword">Cambiar Contraseña:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								      <input type="text" class="form-control" id="editarPassword" name="editarPassword" placeholder="Escribe la nueva contraseña">
								    </div>
								  </div>
								</div>

								<hr>

								<h1>Datos de domicilio</h1>

								<div class="row">
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarCodigo">Codigo Postal:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								      <input type="text" class="form-control" id="editarCodigo" name="editarCodigo" value="'.$_SESSION["codigo"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarEstado">Estado:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="fa fa-street-view" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarEstado" name="editarEstado"  value="'.$_SESSION["estado"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarColonia">Colonia:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-mouse-pointer" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarColonia" name="editarColonia" value="'.$_SESSION["colonia"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle">Calle:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle" name="editarCalle" value="'.$_SESSION["calle"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarExterior">Numero Exterior:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarExterior" name="editarExterior" value="'.$_SESSION["exterior"].' ">
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarInterior">Numero Interior:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarInterior" name="editarInterior" value="'.$_SESSION["interior"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle1">Entre Calle1:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-exchange" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle1" name="editarCalle1" value="'.$_SESSION["calle1"].' ">
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle2">Entre Calle 2:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-exchange" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle2" name="editarCalle2" value="'.$_SESSION["calle2"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase" for="editarDescripcion">Descripcion:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarDescripcion" name="editarDescripcion" value="'.$_SESSION["descripcion"].' ">
								    </div>
								  </div>
								</div>


								<h1>Datos de Facturacion</h1>

								<div class="row">
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarNombrefiscal">Nombre fiscal:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								      <input type="text" class="form-control" id="editarNombrefiscal" name="editarNombrefiscal" value="'.$_SESSION["nombrefiscal"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarEmailfac">Email factura:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="fa fa-street-view" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarEmailfac" name="editarEmailfac"  value="'.$_SESSION["emailfac"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarCp">Codigo Postal:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-mouse-pointer" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCp" name="editarCp" value="'.$_SESSION["cp"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarRfc">rfc:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarRfc" name="editarRfc" value="'.$_SESSION["Rfc"].' ">
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarRegimenfiscal">Regimen fiscal:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarRegimenfiscal" name="editarRegimenfiscal" value="'.$_SESSION["regimenfiscal"].' ">
								    </div>
								  </div>
								</div>

								<button type="submit" class="btn btn-default backColor btn-md pull-left">Actualizar Datos</button>
						</div>';




						}else{

							echo '<h1>Datos de cuenta</h1>

							<div class="row">
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarNombre">Cambiar Nombre:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      <input type="text" class="form-control" id="editarNombre" name="editarNombre" value="'.$_SESSION["nombre"].'">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarEmail">Cambiar Correo Electrónico:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								      <input type="text" class="form-control" id="editarEmail" name="editarEmail" value="'.$_SESSION["email"].'">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarNumero">Numero:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								     <input type="text" class="form-control" id="editarNumero" name="editarNumero" value="'.$_SESSION["Numero"].'">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase" for="editarPassword">Cambiar Contraseña:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								      <input type="text" class="form-control" id="editarPassword" name="editarPassword" placeholder="Escribe la nueva contraseña">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase">Modo de registro en el sistema:</label>
								    <div class="input-group">
											<span class="input-group-addon"><i class="fa fa-'.$_SESSION["modo"].'"></i></span>
										<input type="text" class="form-control text-uppercase"  value="'.$_SESSION["modo"].'" readonly>
								    </div>
								  </div>
								</div>

								<hr>

								<h1>Datos de domicilio</h1>

								<div class="row">
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarCodigo">Codigo Postal:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								      <input type="text" class="form-control" id="editarCodigo" name="editarCodigo" value="'.$_SESSION["codigo"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarEstado">Estado:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="fa fa-street-view" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarEstado" name="editarEstado"  value="'.$_SESSION["estado"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarColonia">Colonia:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-mouse-pointer" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarColonia" name="editarColonia" value="'.$_SESSION["colonia"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle">Calle:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle" name="editarCalle" value="'.$_SESSION["calle"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarExterior">Numero Exterior:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarExterior" name="editarExterior" value="'.$_SESSION["exterior"].' ">
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarInterior">Numero Interior:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarInterior" name="editarInterior" value="'.$_SESSION["interior"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle1">Entre Calle1:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-exchange" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle1" name="editarCalle1" value="'.$_SESSION["calle1"].' ">
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarCalle2">Entre Calle 2:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-exchange" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCalle2" name="editarCalle2" value="'.$_SESSION["calle2"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-12">
								  	<label class="control-label text-muted text-uppercase" for="editarDescripcion">Descripcion:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarDescripcion" name="editarDescripcion" value="'.$_SESSION["descripcion"].' ">
								    </div>
								  </div>
								</div>


								<h1>Datos de Facturacion</h1>

								<div class="row">
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarNombrefiscal">Nombre fiscal:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								      <input type="text" class="form-control" id="editarNombrefiscal" name="editarNombrefiscal" value="'.$_SESSION["nombrefiscal"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarEmailfac">Email factura:</label>
								    <div class="input-group">
								    	<span class="input-group-addon"><i class="fa fa-street-view" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarEmailfac" name="editarEmailfac"  value="'.$_SESSION["emailfac"].' ">
								    </div>
								  </div>
								  <div class="col-lg-3">
								  	<label class="control-label text-muted text-uppercase" for="editarCp">Codigo Postal:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-mouse-pointer" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarCp" name="editarCp" value="'.$_SESSION["cp"].' ">
								    </div>
								  </div>
								</div>

								<div class="row">
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarRfc">rfc:</label>
								    <div class="input-group">
								      <span class="input-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarRfc" name="editarRfc" value="'.$_SESSION["Rfc"].' ">
								    </div>
								  </div>
								  <div class="col-lg-6">
								  	<label class="control-label text-muted text-uppercase" for="editarRegimenfiscal">Regimen fiscal:</label>
								    <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
								      <input type="text" class="form-control" id="editarRegimenfiscal" name="editarRegimenfiscal" value="'.$_SESSION["regimenfiscal"].' ">
								    </div>
								  </div>
								</div>

								<button type="submit" class="btn btn-default backColor btn-md pull-left">Actualizar Datos</button>
						</div>';

						}

						?>

						<?php

							$actualizarPerfil = new ControladorUsuarios();
							$actualizarPerfil->ctrActualizarPerfil();

						?>

					</form>

					<button class="btn btn-danger btn-md pull-right" id="eliminarUsuario">Eliminar cuenta</button>

					<?php

							$borrarUsuario = new ControladorUsuarios();
							$borrarUsuario->ctrEliminarUsuario();

						?>

				</div>

		  	</div>

		</div>

	</div>

</div>

<!--=====================================
VENTANA MODAL PARA COMENTARIOS
======================================-->

<div  class="modal fade modalFormulario" id="modalComentarios" role="dialog">

	<div class="modal-content modal-dialog">

		<div class="modal-body modalTitulo">

			<h3 class="backColor">CALIFICA ESTE PRODUCTO</h3>

			<button type="button" class="close" data-dismiss="modal">&times;</button>

			<form method="post" onsubmit="return validarComentario()">

				<input type="hidden" value="" id="idComentario" name="idComentario">

				<h1 class="text-center" id="estrellas">

		       		<i class="fa fa-star text-success" aria-hidden="true"></i>
					<i class="fa fa-star text-success" aria-hidden="true"></i>
					<i class="fa fa-star text-success" aria-hidden="true"></i>
					<i class="fa fa-star text-success" aria-hidden="true"></i>
					<i class="fa fa-star text-success" aria-hidden="true"></i>

				</h1>

				<div class="form-group text-center">

		       		<label class="radio-inline"><input type="radio" name="puntaje" value="0.5">0.5</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="1.0">1.0</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="1.5">1.5</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="2.0">2.0</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="2.5">2.5</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="3.0">3.0</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="3.5">3.5</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="4.0">4.0</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="4.5">4.5</label>
					<label class="radio-inline"><input type="radio" name="puntaje" value="5.0" checked>5.0</label>

				</div>

				<div class="form-group">

			  		<label for="comment" class="text-muted">Tu opinión acerca de este producto: <span><small>(máximo 300 caracteres)</small></span></label>

			  		<textarea class="form-control" rows="5" id="comentario" name="comentario" maxlength="300" required></textarea>

			  		<br>

					<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">

				</div>

				<?php

					$actualizarComentario = new ControladorUsuarios();
					$actualizarComentario -> ctrActualizarComentario();

				?>

			</form>

		</div>

		<div class="modal-footer">

      	</div>

	</div>

</div>