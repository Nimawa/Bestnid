<?php

	include '../src/head.php';
    require '../src/conexion.php';
	require '../src/imprimirPublicacion.php';
	$conexion=conectar();
    
	$reg=mysql_query(" Select * 
	FROM  publicacion p
	 WHERE  p.baja ='true'
	 " ,$conexion)or die("problema de select".mysql_error());
	imprimirPublicacionFinalizada($reg,$conexion)
	
	
?>
