<?php
	include '../src/head.php';
	require 'validarSesionAdmin.php';
	require '../src/conexion.php';
	require 'imprimirPublicacionAdministrador.php';
	$conexion=conectar();
	//$id_usuario=$_SESSION["id"]; 
	$fec_act=date("Y-m-d");  

	$reg=mysql_query(" Select * FROM publicacion WHERE fecha_fin > '$fec_act' AND baja='false'" ,$conexion)
	or die("problema de select".mysql_error());
	
	if (mysql_num_rows($reg)==0) {
			?>
    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
	            <h4 class="col-xs-10 col-md-10">No existen resultados</h4>
	        </div><br>
	    <?php
    }else{
	while($registros=mysql_fetch_array($reg)){
			$id_publicacion_actual=$registros['id'];
			$publicacion=mysql_query(" select * from publicacion where id=$id_publicacion_actual " ,$conexion)
			or die("problema de select".mysql_error());
			if ($registros['fecha_fin'] > $fec_act) {
			imprimirPublicacion($publicacion,$conexion);
	        }
	}
	}echo '<hr>';
	mysql_close($conexion);
?> 
