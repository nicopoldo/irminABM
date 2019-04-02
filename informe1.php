<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..:: IRMIN ::.. --Alta cliente </title>
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

	<form name="alta" method="post"action="imagenes1.php">  
		<fieldset id="registro">  
			<legend>Informe</legend>   
				<label for="numeroinforme">Nro. informe :</label></td><br><td><input name="numeroinforme" type="text" id="numeroinforme" size="30" value="12345" Readonly /></td>    
				<br /><label for="fecha">Fecha :</label><br /></td><td><input name="fecha" type="text" id="fecha" size="120" value="28/01/2015" Readonly/></td><br>
				<label for="resumen">Resumen </label></td> <br><td><textarea name="resumen" rows="10" cols="40" id="resumen" font="Times New Roman">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</textarea></td><br><br> 
				<br />
				<br /><td class="submit"></td><td><input type="submit" value="Ver imagenes" /></td>
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
