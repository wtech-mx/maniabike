<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php

		session_start();

		$servidor = Ruta::ctrRutaServidor();

		$plantilla = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="'.$servidor.$plantilla["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/

		$url = Ruta::ctrRuta();

		/*=============================================
		MARCADO DE CABECERA
		=============================================*/

		$rutas = array();

		if(isset($_GET["ruta"])){

			$rutas = explode("/", $_GET["ruta"]);

			$ruta = $rutas[0];

		}else{

			$ruta = "inicio";

		}

		$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);

		if(!$cabeceras["ruta"]){

			$ruta = "inicio";

			$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);

		}

	?>
	<!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="<?php echo  $cabeceras['titulo']; ?>">

	<meta name="description" content="<?php echo  $cabeceras['descripcion']; ?>">

	<meta name="keyword" content="<?php echo  $cabeceras['palabrasClaves']; ?>">

	<title><?php echo  $cabeceras['titulo']; ?></title>

	<!--=====================================
	Marcado de Open Graph FACEBOOK
	======================================-->

	<meta property="og:title"   content="<?php echo $cabeceras['titulo'];?>">
	<meta property="og:url" content="<?php echo $url.$cabeceras['ruta'];?>">
	<meta property="og:description" content="<?php echo $cabeceras['descripcion'];?>">
	<meta property="og:image"  content="<?php echo $cabeceras['portada'];?>">
	<meta property="og:type"  content="website">
	<meta property="og:site_name" content="Tu logo">
	<meta property="og:locale" content="es_CO">

	<!--=====================================
	Marcado para DATOS ESTRUCTURADOS GOOGLE
	======================================-->

	<meta itemprop="name" content="<?php echo $cabeceras['titulo'];?>">
	<meta itemprop="url" content="<?php echo $url.$cabeceras['ruta'];?>">
	<meta itemprop="description" content="<?php echo $cabeceras['descripcion'];?>">
	<meta itemprop="image" content="<?php echo $cabeceras['portada'];?>">

	<!--=====================================
	Marcado de TWITTER
	======================================-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo $cabeceras['titulo'];?>">
	<meta name="twitter:url" content="<?php echo $url.$cabeceras['ruta'];?>">
	<meta name="twitter:description" content="<?php echo $cabeceras['descripcion'];?>">
	<meta name="twitter:image" content="<?php echo $cabeceras['portada'];?>">
	<meta name="twitter:site" content="@tu-usuario">

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/dscountdown.css">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

	<!--=====================================
	HOJAS DE ESTILO PERSONALIZADAS
	======================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/infoproducto.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/perfil.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/carrito-de-compras.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/ofertas.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/footer.css">

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/md5-min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/dscountdown.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/knob.jquery.js"></script>

	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!--=====================================
	Pixel de Facebook
	======================================-->

	<?php echo $plantilla["pixelFacebook"]; ?>

</head>

<body>

<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$rutas = array();
$ruta = null;
$infoProducto = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	URL'S AMIGABLES DE CATEGORÍAS
	=============================================*/

	$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

	if($rutas[0] == $rutaCategorias["ruta"]){

		$ruta = $rutas[0];

	}

	/*=============================================
	URL'S AMIGABLES DE SUBCATEGORÍAS
	=============================================*/

	$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

	foreach ($rutaSubCategorias as $key => $value) {

		if($rutas[0] == $value["ruta"]){

			$ruta = $rutas[0];

		}

	}

	/*=============================================
	URL'S AMIGABLES DE SUBCATEGORÍAS 2
	=============================================*/

	$rutaSubCategorias2 = ControladorProductos::ctrMostrarSubCategorias2($item, $valor);

	foreach ($rutaSubCategorias2 as $key => $value) {

		if($rutas[0] == $value["ruta"]){

			$ruta = $rutas[0];

		}

	}

	/*=============================================
	URL'S AMIGABLES DE PRODUCTOS
	=============================================*/

	$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);

	if($rutas[0] == $rutaProductos["ruta"]){

		$infoProducto = $rutas[0];

	}

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto"){

		include "modulos/productos.php";

	}else if($infoProducto != null){

		include "modulos/infoproducto.php";

	}else if($rutas[0] == "buscador" || $rutas[0] == "verificar" || $rutas[0] == "salir" || $rutas[0] == "perfil" || $rutas[0] == "carrito-de-compras" || $rutas[0] == "error" || $rutas[0] == "finalizar-compra" || $rutas[0] == "curso" || $rutas[0] == "ofertas"){

		include "modulos/".$rutas[0].".php";

	}else if($rutas[0] == "inicio"){

		include "modulos/slide.php";

		include "modulos/destacados.php";

	}else{

		include "modulos/error404.php";

	}

}else{

	include "modulos/slide.php";

	include "modulos/destacados.php";

	include "modulos/visitas.php";

}


include "modulos/footer.php";

?>

<!-- boton -->
<script type="text/javascript" style="">
    (function () {
        var options = {
            facebook: "462782217214812", // Facebook page ID
            whatsapp: "+52 1 55 56 11 10 34", // WhatsApp number
            email: "bicimaniamixcoac@gmail.com", // Email
            sms: "5556111034", // Sms phone number
            call: "5556111034", // Call phone number
            company_logo_url: "", // URL of company logo (png, jpg, gif)
            greeting_message: "", // Text of greeting message
            call_to_action: "¿Necisitas ayuda?", // Call to action
            wa_vb_message: "", // Message for WhatsApp
            button_color: "#5faf1d", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,email,sms,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>


<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->

<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
<script src="<?php echo $url; ?>vistas/js/infoproducto.js"></script>
<script src="<?php echo $url; ?>vistas/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vistas/js/registroFacebook.js"></script>
<script src="<?php echo $url; ?>vistas/js/carrito-de-compras.js"></script>
<script src="<?php echo $url; ?>vistas/js/visitas.js"></script>

<!--=====================================
https://developers.facebook.com/
======================================-->

<?php echo $plantilla["apiFacebook"]; ?>

<script>

window.fbAsyncInit = function() {
    FB.init({
      appId      : '658525324666740',
      cookie     : true,
      xfbml      : true,
      version    : 'v7.0'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

  /*=============================================
	COMPARTIR EN FACEBOOK
	https://developers.facebook.com/docs/
	=============================================*/

	$(".btnFacebook").click(function(){

		FB.ui({

			method: 'share',
			display: 'popup',
			href: '<?php  echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>',
		}, function(response){});

	})

	/*=============================================
	COMPARTIR EN GOOGLE
	https://developers.google.com/+/web/share/
	=============================================*/

	$(".btnGoogle").click(function(){

		window.open(

			'https://plus.google.com/share?url=<?php  echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>',
			'',
			'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=400'
		);

		return false;

	})

</script>

	<!--=====================================
	GOOGLE ANALYTICS
	======================================-->

	<?php echo $plantilla["googleAnalytics"]; ?>

</body>
</html>