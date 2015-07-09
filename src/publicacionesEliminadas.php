<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';
	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 
    
	$reg=mysql_query(" Select * 
	FROM  publicacion p
	 WHERE    p.id_usuario = '$id_usuario' 
	 and p.baja ='true'
	 " ,$conexion)or die("problema de select".mysql_error());
	imprimirPublicacionFinalizada($reg,$conexion)
	
	
?>
	   
	   

	
