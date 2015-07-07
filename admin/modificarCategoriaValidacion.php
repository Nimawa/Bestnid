<?php

    require '../src/conexion.php';
	include '../src/head.php';
	$conexion=conectar();
	$idC= $_REQUEST['idC'];
	$nombre=$_REQUEST['nombre'];
	$reg=mysql_query(" Select count(nombre) as cantidad
	FROM categoria c
	where c.nombre='$nombre' and c.baja='false'
    " ,$conexion)or die("problema de select".mysql_error());
	$r=mysql_fetch_array($reg);
	if($r['cantidad']== 1){
	   header("location: modificarCategoria.php?c=2&idC=$idC");
	}
	else{
	mysql_query(" UPDATE categoria SET nombre='$nombre'
	where id= '$idC'
    " ,$conexion)or die("problema de select".mysql_error());
	mysql_close($conexion);
	
	header("location: panel.php?c=1");
	}
	?>