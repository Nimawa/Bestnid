
<!DOCTYPE html>
<html lang="en">

	<body> 
	    
	    <?php include 'head.php';?>
	    <?php include 'navegacion.php';?>
	    <?php include 'busqueda.php';?>
	      
	   	   
	    <div style=" padding: 0 200px;">
	        <div class="container-fluid">
	        	 
	            
	            <div class="row">
	                <div class="col-xs-6 col-md-4">
	                	<?php include 'listadoCategorias.php';?>	                    
	                </div>
	                <div class="col-xs-6 col-md-8">
										<?php
									    
										require 'sql/funcionesDeBusqueda.php';
										require 'imprimirPublicacion.php';
										$conexion=conectar();
										$date=date("Y-m-d");
										$consulta=mysql_query(" Select * From publicacion where fecha_fin >='$date'",$conexion)or die("problema de select".mysql_error()); 
										$aux= " Select * From publicacion a where fecha_fin >='$date'";
										$categoria=$_REQUEST['categoria'];										
										if ($categoria==0){
											$radio=$_REQUEST['radio1'];
											$busqueda=$_REQUEST['campoBusqueda'];
											if($radio=='ambas'){
												$consulta=mysql_query(" Select * From publicacion a where (a.titulo like '%$busqueda%' or a.descripcion like '%$busqueda%' )and a.fecha_fin >='$date'",$conexion)or die("problema de select".mysql_error()); 
												$aux= " Select * From publicacion a where( a.titulo like '%$busqueda%' or a.descripcion like '%$busqueda%') and fecha_fin >='$date' ";	
											}elseif ($radio=='titulo') {
												$consulta=mysql_query(" Select * From publicacion a where a.titulo like '%$busqueda%' and fecha_fin >='$date' ",$conexion)or die("problema de select".mysql_error()); 
												$aux= " Select * From publicacion a where a.titulo like '%$busqueda%' and fecha_fin >='$date' ";	
											}elseif ($radio=='descripcion') {
												$consulta=mysql_query(" Select * From publicacion a where a.descripcion like '%$busqueda%' and fecha_fin >='$date'",$conexion)or die("problema de select".mysql_error()); 
												$aux= " Select * From publicacion a where a.descripcion like '%$busqueda%' and fecha_fin >='$date' ";
											}		
										}else{
											$consulta=mysql_query(" Select * From publicacion a where a.id_categoria=$categoria and fecha_fin >='$date' ",$conexion)or die("problema de select".mysql_error()); 
												$aux= " Select * From publicacion a where a.id_categoria=$categoria and fecha_fin >='$date'";	
										}											
											
										$_SESSION['$a']=$aux;	
										include 'ordenarPublicaciones.php';
										imprimirPublicacion($consulta, $conexion);
										mysql_close($conexion);
									 ?>

									</div>
							</div>
					</div>
			</div>
	</body>
</html>

