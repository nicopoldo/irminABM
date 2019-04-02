<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="ISO-8859-1" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <meta name="author" content="Frabis"/>
        <meta name="Description" content="Descripcion"/>

        <!-- En caso que tengas Favicon -->
        <!-- <link href="favicon.ico" type="image/x-icon" rel="shortcut icon"/> -->
        <!-- // -->

		<title>..:: IRMIN ::..</title>
				
		<!-- Este Ionicons es una tipografia hecha de iconos muy utiles -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" rev="stylesheet" type="text/css" href="estilos.css"  />
		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<style rel="stylesheet" rev="stylesheet" type="text/css">

		/* Contenedor general del visor */
		.contenedorvisor {
		position: relative;
		width: 500px;
		height: 460px;
		margin: 0 auto;
		text-align:center;
		overflow: hidden;
		}
		.contenedorvisor a {
		display: inline;
		text-decoration: none;
		top: 50px;
		}
		/* Estilo miniaturas */
		.miniatura {
		width: 18%; /* 100/nºimagenes, 5 en el ejemplo */
		margin:1px;
		border: 3px solid black;
		opacity: 1;
		}
		/* Estilo imagen principal */
		.grande {
		width:100%;
		position: absolute;
		top: 800px; /* Valor mayor que alto contenedor para ocultar todas las imagenes */
		margin:0 auto;
		text-align: center;
		display: block;
		-webkit-transition: top 1s ease;
		-moz-transition: top 1s ease;
		-o-transition: top 1s ease;
		-ms-transition: top 1s ease;
		transition: top 1s ease;
		}
		/* Relleno inicial del espacio para imagen principal */
		.muestra {
		opacity: .3;
		width: 200%;
		top: 100px;
		}
		/* Marcamos con un borde la miniatura seleccionada */
		a:hover .miniatura {
		border: 3px solid grey;
		opacity: .5;
		}
		/* Movemos con transicion la imagen seleccionada a la zona visible */
		a:hover .grande {
		top: 100px;
		-webkit-transition: top 1s ease;
		-moz-transition: top 1s ease;
		-o-transition: top 1s ease;
		-ms-transition: top 1s ease;
		transition: top 1s ease;
		z-index:3;
		}

		</style>

	</head>
	<body class="menu-activo">
	<?php
		// Como comentario, el session_start() tiene que ir SI o SI antes de cualquier etiqueta HTML de la pagina.
  		// session_start();
	?>
		
		<header>
			<span><a href="#" class="gatillo"><i class="ion-drag"></i></a></span>
			<h1>IRMIN</h1>
		</header>

		<div class="contenido cf">

			<nav class="menu cf">
				
				<!-- <h2>Menu</h2> -->

				<ul>
					<li><a href="home.php">Inicio </a></li>
					<li><a href="nuevopedido.php">Nuevo Pedido de revision</a></li>

					<?php //if (! empty($_SESSION['usuario'])) { ?>

					<li><a href="pedidossinevaluar.php">Buscar pedidos sin evaluar</a></li>
					<li><a href="pedidosevaluados.php">Buscar pedidos evaluados</a></li>
					<li><a href="altacliente.php">Alta de cliente</a></li>
					<li><a href="modificarcliente.php">Modificar cliente</a></li>
					<li><a href="bajacliente.php">Baja de cliente</a></li>
					<li><a href="busquedaparticular.php">Realizar busqueda particular</a></li>
					<li><a href="buscarinformesdiarios.php">Buscar informes diarios</a></li>

					<!--<li><a href="catalogo1.php">Realizar Pedido!</a></li>-->
					<?php 
					
					/*$usuario=$_SESSION['usuario']; 
					foreach($usuario as $k => $v){
					if($v['tipo']=='adm')
					{*/
					
					?>
					<?php
					/*
					}}}else{
					*/	 
					?>

					<li><a href="login.html">Salir</a></li>

					<?php //} ?>

				</ul>
			</nav>

			<section class="cf">
				<div class="principal">
					<form name="mostrar" method="post" action="evaluarpedido.php">  
						<fieldset id="imagenes">  
							<legend>Imagenes del dia 28/01/2015</legend>   
								<div class="contenedorvisor">
									<a href="javascript:void(0);">
										<img class="miniatura" src="imagenes/topes150128.1738.jpg" />
										<img class="grande" src="imagenes/topes150128.1738.jpg" />
									</a>
									<a href="javascript:void(0);">
										<img class="miniatura" src="imagenes/topes150128.1838.jpg" />
										<img class="grande" src="imagenes/topes150128.1838.jpg" />
									</a>
									<a href="javascript:void(0);">
										<img class="miniatura" src="imagenes/topes150128.1938.jpg" />
										<img class="grande" src="imagenes/topes150128.1938.jpg" />
									</a>
									<!-- Se pueden agregar tantas como queramos
									<a href="javascript:void(0);">
										<img class="miniatura" src="URL_IMAGEN_MIN4" />
										<img class="grande" src="URL_IMAGEN_ORIG4" />
									</a>
									<a href="javascript:void(0);">
										<img class="miniatura" src="URL_IMAGEN_MIN5" />
										<img class="grande" src="URL_IMAGEN_ORIG5" />
									</a>
									-->
									<a href="javascript:void(0);">
									<img class="grande muestra" src="/imagenes/topes150128.1738.jpg" />
									</a>
								</div>
						</fieldset>
						<td class="submit"></td><td><input type="submit" value="Evaluar" /></td>  
					</form>
				</div>

			</section>

			<footer>	
				<p> Pie de pagina | <a href="mailto:info@irmin.com">info@irmin.com</a>  </p>
			</footer>

		</div>  
		<script type="text/javascript" src="main.js"></script>
	</body>
</html>