<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..:: IRMIN ::.. --Dar de baja un cliente </title>
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

	<form name="modificar" method="post"action="">  
		<fieldset id="modificacion">  
			<legend>Eliminar o modificar un usuario</legend>   
				<label for="dniocuit">DNI o CUIT :</label></td><br><td><input name="dniocuit" type="text" id="dniocuit" size="30" value="31234567"/></td><br>
				<label for="razonsocial">Razón social :</label><br /></td><td><input name="razonsocial" type="text" id="razonsocial" size="120" value="Juan Perez" /></td> 
				<br /><label for="domicilio">Domicilio </label><br /></td> <td><input name="domicilio" type="text" id="domicilio" size="120" value="Calle Falsa 123"></td>
				<br /><label for="email">E-mail </label><br /></td> <td><input name="email" type="text" id="email" size="120" value="jperez@algunmail.com"></td> <br><br>
				<td class="submit"></td><td><input type="submit" value="Eliminar" /></td>
				<td class="submit"></td><td><input type="submit" value="Modificar" /></td>
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
            
			<?php 
			/*
			$usuario=$_SESSION['usuario']; 
			foreach($usuario as $k => $v){
			if($v['tipo']=='adm')
			{
			*/
			?>
		<?php
		/*
		 }}}else{
		*/	 
		?>
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
