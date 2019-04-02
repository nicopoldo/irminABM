<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="ISO-8859-1" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <meta name="author" content="Frabis"/>
        <meta name="Description" content="Descripci�n"/>

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
		// Como comentario, el session_start() tiene que ir SI o SI antes de cualquier etiqueta HTML de la p�gina.
  		// session_start();
	?>
		
		<header>
			<span><a href="#" class="gatillo"><i class="ion-drag"></i></a></span>
			<h1>IRMIN</h1>
		</header>

		<div class="contenido cf">

			<nav class="menu cf">
				
				<!-- <h2>Men�</h2> -->

				<ul>
					<li><a href="home.php">Inicio </a></li>
					<li><a href="nuevopedido.php">Nuevo Pedido de revisi�n</a></li>

					<?php //if (! empty($_SESSION['usuario'])) { ?>

					<li><a href="pedidossinevaluar.php">Buscar pedidos sin evaluar</a></li>
					<li><a href="pedidosevaluados.php">Buscar pedidos evaluados</a></li>
					<li><a href="altacliente.php">Alta de cliente</a></li>
					<li><a href="modificarcliente.php">Modificar cliente</a></li>
					<li><a href="bajacliente.php">Baja de cliente</a></li>
					<li><a href="busquedaparticular.php">Realizar b�squeda particular</a></li>
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
					<form name="alta" method="post"action="">  
						<fieldset id="registro">  
							<legend>Registrar pedido de revisi�n</legend>   
								<label for="dniocuit">DNI o CUIT </label></td><br> <td><input name="dniocuit" type="text" id="dniocuit" size="120" value="32123456" Readonly></td><br> 
								<label for="fechapedido">Fecha: </label></td><br><td><input name="fechapedido" type="text" id="fechapedido" size="30" /></td>  
								<br><label for="ubicacion">Ubicaci�n: </label></td><br><td><input name="ubicacion" type="text" id="ubicacion" size="120" /></td>  <br>
								<label for="observaciones">Observaciones </label></td> <br><td><textarea name="observaciones" rows="10" cols="40" id="observaciones" font="Times New Roman" placeholder="Datos que complementen la informaci�n anterior"></textarea></td><br><br>
								<label for="numero">N�mero de pedido: </label></td><br><td><input name="numero" type="text" id="numero" size="20" value="158224" Readonly /></td><br><br>
								<td class="submit"></td><td><input type="submit" value="Registrar" /></td>
						</fieldset>  
					</form>
				</div>
			</section>

			<footer>	
				<p> Pie de p�gina | <a href="mailto:info@irmin.com">info@irmin.com</a>  </p>
			</footer>

		</div>  
		<script type="text/javascript" src="main.js"></script>
	</body>
</html>