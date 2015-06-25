<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';

	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 
	$fec_act=date("Y-m-d");  

	$reg=mysql_query(" Select * FROM publicacion AS publi INNER JOIN oferta AS ofer WHERE ofer.id_usuario=$id_usuario AND ofer.id_publicacion=publi.id AND publi.fecha_fin > $fec_act" ,$conexion)
	or die("problema de select".mysql_error());
	
	if (mysql_num_rows($reg)==0) {
			?>
    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
	            <h4 class="col-xs-10 col-md-10">No existen resultados</h4>
	        </div><br>
	    <?php
    }else{
	while($registros=mysql_fetch_array($reg)){
			$id_publicacion_actual=$registros['id_publicacion'];
			$publicacion=mysql_query(" select * from publicacion where id=$id_publicacion_actual " ,$conexion)
			or die("problema de select".mysql_error());
			if ($registros['fecha_fin'] > $fec_act) {
			imprimirPublicacion($publicacion,$conexion);
			?><div class="row" style="margin-top: 20px; background-color: #EEEEEE">
			   	<h4 class="col-xs-10 col-md-10">Monto: $<?php echo $registros['monto']?></h4>
	           	<h4 class="col-xs-10 col-md-10">Comentario: <?php echo $registros['descripcion']?></h4>
	           	<a class="pull-right" >  
	        	<input  type="button" class="btn btn-primary btn-sm" style=" margin: 10px;" value="MODIFICAR OFERTA" onClick="window.location.href='modificarOferta.php?id=<?php echo $registros['id'];?>&idpubli=<?php echo $registros['id_publicacion'];?>'">
	        	</a> 
	        </div><br>
	        <?php	
	        }
	}
	}echo '<hr>';
	mysql_close($conexion);
?> 
