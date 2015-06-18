<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';
	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 
	$fec_act=date("Y-m-d");
	$reg=mysql_query(" select p.id from publicacion p join oferta o on p.id=o.id_publicacion where p.fecha_fin > $fec_act and p.baja='false' and p.id_usuario=$id_usuario group by p.id " ,$conexion)or die("problema de select".mysql_error());
	$totalFilas=mysql_num_rows($reg);  
	if($totalFilas==0){
    	?>
    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
	            <h4 class="col-xs-10 col-md-10">No existen resultados</h4>
	        </div><br>
	    <?php
    }
    else{
		while($registros=mysql_fetch_array($reg)){
				$id_publicacion_actual=$registros['id'];
				$publicacion=mysql_query(" select * from publicacion where id=$id_publicacion_actual " ,$conexion)or die("problema de select".mysql_error());
				imprimirPublicacion($publicacion,$conexion);
				$ganadora=mysql_query(" select * from oferta where id_publicacion=$id_publicacion_actual and ganador='true' " ,$conexion)or die("problema de select".mysql_error());
				$totalfilas=mysql_num_rows($ganadora);
				$of=mysql_query(" select * from oferta where id_publicacion=$id_publicacion_actual " ,$conexion)or die("problema de select".mysql_error());
				if($totalfilas==0){
					while($oferta=mysql_fetch_array($of)){
						?><div class="row" style="margin-top: 20px; background-color: #EEEEEE">
			                 	<h4 class="col-xs-10 col-md-10"><?php echo $oferta['descripcion']?></h4>
			                 	<a class="pull-right" >  
			                    <input  type="button" class="btn btn-primary btn-sm" style=" margin: 10px;" value="ADJUDICAR" onClick="adjudicarPublicacion(<?php echo $oferta['id'];?>)">
			              		</a> 
			             </div><br>
			             <?php
					}echo '<hr>';
				}else{
					while($oferta=mysql_fetch_array($of)){
						if($oferta['ganador']=="false"){
							?><div class="row" style="margin-top: 20px; background-color: #EEEEEE">
			                 	<h4 class="col-xs-10 col-md-10"><?php echo $oferta['descripcion']?></h4>
			                 	<a class="pull-right" >  
			              		</a> 
			             </div><br>
			             <?php
						}else{
							?><div class="row" style="margin-top: 20px; background-color: #EEEEEE">
			                 	<h4 class="col-xs-10 col-md-10"><?php echo $oferta['descripcion']?><a style=" float: right; color:red; "> Oferta Ganadora </a></h4>
			             </div><br>
			             <?php
						}
					}echo '<hr>';

				}
				
		};
	};	
	mysql_close($conexion);
?> 

