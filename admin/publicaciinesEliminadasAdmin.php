<?php

	include '../src/head.php';
    require '../src/conexion.php';
	require 'imprimirPublicacionAdministrador.php';
	require 'validarSesionAdmin.php';
	$conexion=conectar();
    ?>
						<h3>
	                        <strong style=""> Publicaciones Eliminadas  </strong> 
	                    </h3><br>
	<?php
	$reg=mysql_query(" Select * 
	FROM  publicacion p
	 WHERE  p.baja ='true'
	 " ,$conexion)or die("problema de select".mysql_error());
	imprimirPublicacionFinalizadaAdmin($reg,$conexion)
	
	
?>
