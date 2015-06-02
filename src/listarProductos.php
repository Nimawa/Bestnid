<?php 
	include 'ordenarPublicaciones.php';
	$reg=mysql_query(" Select * from publicacion ",$conexion)or die("problema de select".mysql_error());
	require 'imprimirPublicacion.php';
	imprimirPublicacion($reg,$conexion);
	mysql_close($conexion);
	$_SESSION['$a']=(" Select * from publicacion a ");
?>
                  