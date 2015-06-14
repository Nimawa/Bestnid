<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';

	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 

	$reg=mysql_query(" Select * FROM oferta AS ofer INNER JOIN publicacion AS publi WHERE ofer.id_usuario=$id_usuario AND ofer.ganador='false' AND publi.baja=false AND ofer.id_publicacion=publi.id" ,$conexion)
	or die("problema de select".mysql_error());
	while($registros=mysql_fetch_array($reg)){
			$id_publicacion_actual=$registros['id_publicacion'];
			$publicacion=mysql_query(" select * from publicacion where id=$id_publicacion_actual " ,$conexion)
			or die("problema de select".mysql_error());
			imprimirPublicacion($publicacion,$conexion);
	
				?><div class="row" style="margin-top: 20px; background-color: #EEEEEE">
				       	<h4 class="col-xs-10 col-md-10">Monto: $<?php echo $registros['monto']?></h4>
	                 	<h4 class="col-xs-10 col-md-10">Comentario: <?php echo $registros['descripcion']?></h4>
	                 	<a class="pull-right" >  
	                    <input  type="button" class="btn btn-primary btn-sm" style=" margin: 10px;" value="MODIFICAR OFERTA" onclick="">
	              		</a> 
	             </div><br>
	             <?php
			}echo '<hr>';
	mysql_close($conexion);
?> 
