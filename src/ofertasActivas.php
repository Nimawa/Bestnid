<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 

	$reg=mysql_query(" Select * FROM oferta AS ofer INNER JOIN publicacion AS publi WHERE ofer.id_usuario=$id_usuario AND ofer.ganador='false' AND publi.baja=false AND ofer.id_publicacion=publi.id" ,$conexion)or die("problema de select".mysql_error());
	require 'imprimirPublicacion.php';
	imprimirPublicacion($reg,$conexion);
	mysql_close($conexion);
	$_SESSION['$a']=(" Select * from publicacion a ");
?> 
