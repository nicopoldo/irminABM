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
				<h1>IRMIN</h1>
				<h2>Sistema de registro continuo del riesgo de caida de granizo a partir de imagenes</h2>

				<br>

				<p>Este fenomeno climatico afecta a pequeños y grandes productores debido a que produce grandes daños que implican perdidas economicas. No solo afecta al ambiente del agro, sino tambien a gran parte de la poblacion, ya que en los ultimos años se han producido de forma periodica, lo que dio como resultado importantes perdidas en bienes personales como rotura de vehiculos, hogares, etc.
Desde otro punto de vista, este mismo problema tambien afecta de manera notable a las empresas aseguradoras, debido a que estas se encargan de asegurar los bienes que los clientes deseen, en especial lotes de campo utilizados para la siembra. En este caso en particular, ocurre que los productores luego de una caida de granizo, recurren a las aseguradoras para asegurar los campos que ya fueron dañados. Luego de realizado este tramite, esperan a la siguiente lluvia para ir a denunciar dicha destruccion. Esta estafa sucede ya que las aseguradoras no cuentan con la infraestructura necesaria para auditar el campo previo a la firma del contrato con la aseguradora, ni tampoco cuentan con la tecnologia como para detectar certeramente la zona afectada por el fenomeno.
</p>


			</section>

			<footer>	
				<p> Pie de pagina | <a href="mailto:info@irmin.com">info@irmin.com</a> </p>
			</footer>

		</div>  
		<script type="text/javascript" src="main.js"></script>
	</body>
</html>