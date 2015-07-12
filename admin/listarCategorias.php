<?php
	require '../src/conexion.php';
	include '../src/head.php';
	$conexion=conectar();
	
	
	$reg=mysql_query(" Select * 
	FROM categoria c
	where c.baja ='false'
	order by c.nombre " ,$conexion)or die("problema de select".mysql_error());
		$totalFilas=mysql_num_rows($reg);  
	    if($totalFilas==0){
	    	?>
	    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
		            <h4 class="col-xs-10 col-md-10" >No existen resultados</h4>
		        </div><br>
		    <?php
			}
			while($r=mysql_fetch_array($reg))
			{
			 ?>
			 			<div class="row" style="margin-top: 20px; background-color: #EEEEEE">
				       		<h4 class="col-xs-12 col-md-12"> <?php echo $r['nombre']?></h4>
				       	
						
                        <a class="pull-right" >
                                                <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="MODIFICAR" onclick="window.location.href= 'modificarCategoria.php?idC=<?php echo $r['id'] ?>'"> 
                                                <input  type="button" class="btn btn-danger" style=" margin-top: 10px;" value="BORRAR" onclick="borrarCategoria(<?php echo $r['id'] ?>)">
                                              </a>
											  </div>
						<?php }
?>