<?php
	require '../src/conexion.php';
	require '../src/imprimirPublicacion.php';
	include '../src/head.php';
	require 'validarSesionAdmin.php';
	$conexion=conectar();
	$fecha1=$_REQUEST['fecha1'];
	$fecha2=$_REQUEST['fecha2'];
	$date=date("Y-m-d");
    if (($fecha2 < $fecha1)||($fecha2 > $date)){
    	?>
    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
	            <h4 class="col-xs-10 col-md-10" style="color: red">ERROR! la segunda fecha debe ser mayor que la primera y la segunda fecha no debe superar la fecha actual</h4>
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
	
			imprimirPublicacion($reg,$conexion);
		
			
			}
    }
  
	
	mysql_close($conexion);

?>