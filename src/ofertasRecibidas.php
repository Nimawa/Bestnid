<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';
	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 
	$fec_act=date("Y-m-d");
	$reg=mysql_query(" select p.id from publicacion p join oferta o on p.id=o.id_publicacion where p.fecha_fin > $fec_act and p.baja='false' and p.id_usuario=$id_usuario group by p.id " ,$conexion)or die("problema de select".mysql_error());
	while($registros=mysql_fetch_array($reg)){
			$id_publicacion_actual=$registros['id'];
			$publicacion=mysql_query(" select * from publicacion where id=$id_publicacion_actual " ,$conexion)or die("problema de select".mysql_error());
			imprimirPublicacion($publicacion,$conexion);
			$of=mysql_query(" select * from oferta where id_publicacion=$id_publicacion_actual " ,$conexion)or die("problema de select".mysql_error());
			while($oferta=mysql_fetch_array($of)){
				?><div class="row" style="margin-top: 20px; background-color: #EEEEEE">
	                 	<h4 class="col-xs-10 col-md-10"><?php echo $oferta['descripcion']?></h4>
	                 	<a class="pull-right" >  
	                    <input  type="button" class="btn btn-primary btn-sm" style=" margin: 10px;" value="ADJUDICAR" onclick="window.location.href='adjudicarPublicacion.php?idPublicacion=<?php echo $oferta['id'];?>'">
	              		</a> 
	             </div><br>
	             <?php
			}echo '<hr>';
	};
	mysql_close($conexion);
?> 

