<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..:: IRMIN ::.. --Realizar búsqueda particular </title>
<link rel="stylesheet" rev="stylesheet" type="text/css" href="hoja1.css"  />
</head>

<body>
<?php
/*
  session_start(); 
*/
?>
<div class="cabecera">
  <p class="parrafo">
  <h1 class="titulopripal"> IRMIN </h1>
  </p>
  </div>
  
  <div class="centro">
  
    <div class="principal">
	
    <!--
	<p class="parrafo">
	<img src="Puesta de sol.jpg"  class="imagenp"/>
	</p>
	-->
	
	<form name="formulario" method="post"action="pedido1584545.php">  
			<fieldset id="registro">  
				<legend>Pedidos evaluados</legend>   
					<label for="numero">Nro de pedido </label></td><br> <td><input name="numero" type="text" id="numero" size="20" value="1584545" Readonly></td><br>
					<label for="dniocuit">DNI o CUIT </label></td><br> <td><input name="dniocuit" type="text" id="dniocuit" size="120" value="34123456" Readonly></td><br> 
					<label for="fechapedido">Fecha: </label></td><br><td><input name="fechapedido" type="text" id="fechapedido" size="30" value="17/05/2014" Readonly /></td>  
					<br><label for="ubicacion">Ubicación: </label></td><br><td><input name="ubicacion" type="text" id="ubicacion" size="120" value="32''57'S   60''39'O" Readonly /></td><br>
					<br><td class="submit"></td><td><input type="submit" value="Ver" /></td><td><input type="submit" value="Imprimir"/></td> <td><input type="submit" value="Volver" /></td>
			</fieldset>  
		</form>

	</div>
	
   	<div class="menu">
		<p class="parrafom">
		<h2 class="titulomenu">Menú</h2>
		
		<ul class="listao">
		<li><a href="home.php">Inicio </a></li>
		<li><a href="nuevopedido.php">Nuevo Pedido de revisión</a></li>
		
		
		<?php
		/*
		if (! empty($_SESSION['usuario']))
		{
		*/
		?>
        
        
			<li><a href="pedidossinevaluar.php">Buscar pedidos sin evaluar</a></li>
			<li><a href="pedidosevaluados.php">Buscar pedidos evaluados</a></li>
            <li><a href="altacliente.php">Alta de cliente</a></li>
            <li><a href="modificarcliente.php">Modificar cliente</a></li>
            <li><a href="bajacliente.php">Baja de cliente</a></li>
            <li><a href="busquedaparticular.php">Realizar búsqueda particular</a></li>
            <li><a href="buscarinformesdiarios.php">Buscar informes diarios</a></li>
            
			<!--<li><a href="catalogo1.php">Realizar Pedido!</a></li>-->
			<?php 
			/*
			$usuario=$_SESSION['usuario']; 
			foreach($usuario as $k => $v){
			if($v['tipo']=='adm')
			{
			*/
			?>
		<!--	<li><a href="paginapanel.php">Panel de Control</a></li> -->
		<?php
		/*
		 }}}else{
		*/	 
		?>
			<!--
            <li><a href="formpaginaingreso.php">Iniciar Sesión!</a></li>
            -->
			<li><a href="login.html">Salir</a></li>
            
		<?php 
		/*
		}
		*/
		?>
		</ul>
		</p>
	</div>
	
  </div>  
  
  <div class="pie">
	  <p class="parrafo">
    <h3 class="textopie"> PIE DE PAGINA </h3>
	</p>
  </div>  
</body>
</html>
