<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="ISO-8859-1" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <meta name="author" content="Frabis"/>
        <meta name="Description" content="Descripción"/>

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
		// Como comentario, el session_start() tiene que ir SI o SI antes de cualquier etiqueta HTML de la página.
  		// session_start();
	?>
		
		<header>
			<span><a href="#" class="gatillo"><i class="ion-drag"></i></a></span>
			<h1>IRMIN</h1>
		</header>

		<div class="contenido cf">

			<nav class="menu cf">
				
				<!-- <h2>Menú</h2> -->

				<ul>
					<li><a href="home.php">Inicio </a></li>
					<li><a href="nuevopedido.php">Nuevo Pedido de revisión</a></li>

					<?php //if (! empty($_SESSION['usuario'])) { ?>

					<li><a href="pedidossinevaluar.php">Buscar pedidos sin evaluar</a></li>
					<li><a href="pedidosevaluados.php">Buscar pedidos evaluados</a></li>
					<li><a href="altacliente.php">Alta de cliente</a></li>
					<li><a href="modificarcliente.php">Modificar cliente</a></li>
					<li><a href="bajacliente.php">Baja de cliente</a></li>
					<li><a href="busquedaparticular.php">Realizar búsqueda particular</a></li>
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
				<h1>Este es el contenido del sitio</h1>
				<h2>Este es el contenido del sitio</h2>
				<h3>Este es el contenido del sitio</h3>
				<h4>Este es el contenido del sitio</h4>
				<h5>Este es el contenido del sitio</h5>
				<h6>Este es el contenido del sitio</h6>

				<br>

				<p>Vestibulum at turpis augue. Praesent lacinia nisl vitae molestie consequat. Maecenas pretium lobortis nisl a vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eu iaculis urna. Ut eu lectus iaculis arcu efficitur dapibus. Ut sit amet justo sit amet nibh efficitur eleifend eu quis ante. Nam congue aliquet dapibus. Mauris molestie, mi vitae interdum egestas, nisi velit euismod lorem, at tincidunt sapien neque ac turpis. Ut suscipit porttitor dapibus.</p>

				<p>Donec elementum aliquet imperdiet. Proin odio est, dictum eu orci bibendum, fringilla aliquet urna. Ut ac venenatis massa, quis pulvinar tortor. Suspendisse potenti. Vivamus nisi nisl, mollis a facilisis in, viverra sit amet turpis. Nullam a lectus eu nibh tincidunt dictum vitae a ipsum. Sed quis rhoncus quam.</p>

				<p>Donec auctor elementum dolor. Aenean aliquam pellentesque quam, vitae aliquet diam tincidunt sit amet. Maecenas condimentum nisi in erat suscipit, vel tincidunt leo volutpat. Nunc laoreet eu ex id tempor. Proin egestas pharetra odio, eu interdum augue lobortis vitae. Fusce ante elit, iaculis vitae eleifend a, elementum sit amet quam. Donec et libero varius, sodales nisi id, dignissim ante. Nulla facilisi. Nunc malesuada consectetur faucibus. Vivamus interdum blandit semper. Vestibulum pulvinar convallis dui, at pellentesque enim accumsan non. Ut sagittis urna placerat velit dapibus, in venenatis elit mattis.</p>

				<p>Fusce congue tincidunt erat quis convallis. Quisque massa tortor, suscipit et nulla id, placerat interdum arcu. Etiam mauris nulla, euismod a leo sit amet, vehicula consectetur nibh. Sed dignissim metus nunc, non facilisis tellus maximus et. Cras eget aliquet libero. Integer eu tortor quis nisl maximus cursus. Phasellus laoreet mauris et nibh ultricies, quis ullamcorper tellus ultricies. Mauris erat nunc, suscipit ornare pretium porta, accumsan vel mauris.</p>

				<p>Vestibulum varius velit id sodales rutrum. Suspendisse mauris dui, tempor eu accumsan rutrum, venenatis ut diam. Vivamus at tempus purus. In porttitor urna turpis, in volutpat odio pretium eget. Etiam libero nisi, aliquet quis porta sed, ornare eu elit. Fusce tincidunt eget neque nec pellentesque. Aenean in sem eu nisl posuere pharetra id at lectus. Vestibulum luctus diam mi, ut ornare lectus blandit quis. Sed sodales semper nulla a blandit. Donec vulputate ligula nec scelerisque gravida. Aliquam erat volutpat. Integer ante diam, ultrices vel ipsum quis, condimentum finibus tortor.</p>

				<p>Listado</p>
				<ul>
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
					<li>Item 4</li>
				</ul>

				<p>Listado ordenado</p>
				<ol>
					<li>Item</li>
					<li>Item</li>
					<li>Item</li>
					<li>Item</li>
				</ol>

				<p><img src="http://lorempixel.com/g/400/200/" /></p>

				<iframe width="420" height="315" src="https://www.youtube.com/embed/z7hhDINyBP0" frameborder="0" allowfullscreen></iframe>


			</section>

			<footer>	
				<p> Pie de página | <a href="mailto:info@irmin.com">info@irmin.com</a> | frabicio <?= date('Y') ?> </p>
			</footer>

		</div>  
		<script type="text/javascript" src="main.js"></script>
	</body>
</html>