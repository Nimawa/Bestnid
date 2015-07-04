<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';
	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 
    $fec_act=date("Y-m-d");  
	

	$reg=mysql_query(" Select * 
	FROM  publicacion p
	 WHERE    p.id_usuario = '$id_usuario'  AND p.fecha_fin < '$fec_act'
	 and p.baja = 'false'
	 " ,$conexion)or die("problema de select".mysql_error());
	imprimirPublicacion($reg,$conexion);
	
	mysql_close($conexion);
?> 
