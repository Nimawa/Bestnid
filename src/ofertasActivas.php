<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';

	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 

	$oferta=mysql_query("Select ofer.id as ido, ofer.id_publicacion, ofer.id_usuario as id_usuarioo, ofer.monto, ofer.descripcion as descripciono, ofer.ganador FROM oferta AS ofer INNER JOIN publicacion AS publi WHERE ofer.id_usuario=$id_usuario  AND publi.baja='false' AND ofer.id_publicacion=publi.id
")or die("problema de select".mysql_error());//renombra las columnas sino queda descripcion dos veces
	

	$reg=mysql_query(" Select * FROM oferta AS ofer INNER JOIN publicacion AS publi WHERE ofer.id_usuario=$id_usuario AND publi.baja='false' AND ofer.id_publicacion=publi.id" ,$conexion)
	or die("problema de select".mysql_error());

	if (mysql_num_rows($oferta)==0) {
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
			imprimirPublicacion($publicacion,$conexion);
				if ( $ofer=mysql_fetch_array($oferta)){
				
				?><div class="row" style="margin-top: 20px; background-color: #EEEEEE">
				       	<h4 class="col-xs-10 col-md-10">Monto: $<?php echo $ofer['monto']?></h4>
	                 	<h4 class="col-xs-10 col-md-10">Comentario: <?php echo $ofer["descripciono"]?></h4>
	                 	<a class="pull-right" >  
	                    <input  type="button" class="btn btn-primary btn-sm" style=" margin: 10px;" value="MODIFICAR OFERTA" onClick="window.location.href='modificarOferta.php?id=<?php echo $ofer['ido'];?>&idpubli=<?php echo $ofer['id_publicacion'];?>'">
	              		</a> 
	             </div><br>
	             <?php
	         	}
			}echo '<hr>';
	}
	mysql_close($conexion);
?> 
