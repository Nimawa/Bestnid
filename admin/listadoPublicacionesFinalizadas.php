<?php
	require '../src/conexion.php';
	require '../src/imprimirPublicacion.php';
	include '../src/head.php';
	$conexion=conectar();
	$fecha1=$_REQUEST['fecha1'];
	$fecha2=$_REQUEST['fecha2'];
	
    if ($fecha2 < $fecha1) {
    	?>
    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
	            <h4 class="col-xs-10 col-md-10" style="color: red">ERROR! la segunda fecha debe ser mayor que la prtimera</h4>
	        </div><br>
	    <?php  
    }else{
    	$reg=mysql_query(" Select * FROM publicacion where fecha_fin BETWEEN '$fecha1' and '$fecha2'  " ,$conexion)or die("problema de select".mysql_error());
		$totalFilas=mysql_num_rows($reg);  
	    if($totalFilas==0){
	    	?>
	    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
		            <h4 class="col-xs-10 col-md-10" >No existen resultados</h4>
		        </div><br>
		    <?php
	    }
	    else{
		    echo 'mierda';
			imprimirPublicacion($reg,$conexion);
		
			
			}
    }
  
	
	mysql_close($conexion);

?>