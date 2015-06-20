<?php
	require '../src/conexion.php';
	$conexion=conectar();
	$fecha1=$_REQUEST['fecha1'];
	$fecha2=$_REQUEST['fecha2'];
	
    if ($fecha2 < $fecha1) {
    	?>
    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
	            <h4 class="col-xs-10 col-md-10" style="color: red">ERROR! la segunda fecha debe ser mayor que la primera</h4>
	        </div><br>
	    <?php  
    }else{
    	$reg=mysql_query(" Select * FROM usuario where fecha_alta BETWEEN '$fecha1' and '$fecha2'  " ,$conexion)or die("problema de select".mysql_error());
		$totalFilas=mysql_num_rows($reg);  
	    if($totalFilas==0){
	    	?>
	    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
		            <h4 class="col-xs-10 col-md-10" >No existen resultados</h4>
		        </div><br>
		    <?php
	    }
	    else{
		    ?>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Fecha de alta</th><th>Nombre de Usuario</th><th>Nombre</th><th>Apellido</th>
						</tr>
					</thead>	
			<?php
			while($registros=mysql_fetch_array($reg)){
				?>
						<tr>
							<td><?php echo $registros['fecha_alta'] ?></td><td><?php echo $registros['mail'] ?></td><td><?php echo $registros['nombre'] ?></td><td><?php echo $registros['apellido'] ?></td>
						</tr>
				<?php
			}
			?></table><?php
		}
    }
  
	
	mysql_close($conexion);

?>