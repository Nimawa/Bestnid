<?php

	
	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 


	$reg=mysql_query(" Select * from publicacion WHERE id_usuario=$id_usuario AND baja=false",$conexion)or die("problema de select".mysql_error());
	require 'imprimirPublicacion.php';
	imprimirPublicacion($reg,$conexion);
	mysql_close($conexion);
//	$_SESSION['$a']=(" Select * from publicacion a ");
	

?> 
