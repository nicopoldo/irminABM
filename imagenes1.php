<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..:: IRMIN ::.. --Buscar pedidos sin evaluar </title>
<link rel="stylesheet" rev="stylesheet" type="text/css" href="hoja1.css"  />

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
width: 18%; /* 100/nºimágenes, 5 en el ejemplo */
margin:1px;
border: 3px solid black;
opacity: 1;
}
/* Estilo imagen principal */
.grande {
width:100%;
position: absolute;
top: 800px; /* Valor mayor que alto contenedor para ocultar todas las imágenes */
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
/* Movemos con transición la imagen seleccionada a la zona visible */
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

		<form name="mostrar" method="post" action="informe1.php">  
			<fieldset id="imagenes">  
				<legend>Imagenes del día 28/01/2015</legend>   
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
			<td class="submit"></td><td><input type="submit" value="Volver" /></td> 
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
