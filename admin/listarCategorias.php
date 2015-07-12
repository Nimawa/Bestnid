
<!DOCTYPE html>
<html lang="en">
  <body> 
        <?php 
	        include '../src/head.php';
	        require 'validarSesionAdmin.php';
	        include 'navegacion.php';
	        require '../src/conexion.php';
			$conexion=conectar();
        ?>
 
    <div style=" padding: 0 200px;">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <?php include 'areaAdministracion.php';?>  
                </div>
	            <div id="resulta" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	            	<div  class="row">
	                    <h3>
	                        <strong style=""> Listado de Categorias  </strong> 
                	</div> <br>   
	            	<div class="row">
	            		<?php
								$reg=mysql_query(" Select *	FROM categoria c where c.baja ='false'order by c.nombre " ,$conexion)or die("problema de select".mysql_error());
								$totalFilas=mysql_num_rows($reg);  
							    if($totalFilas==0){?>
							    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
								            <h4 class="col-xs-10 col-md-10" >No existen resultados</h4>
								        </div><br>
					    				<?php
								}
						?>
						<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Nombre</th><th></th><th></th><th></th>
							</tr>
						</thead>
							<?php
							while($r=mysql_fetch_array($reg)){
								?>
								<tr>
								<td><?php echo $r['nombre'] ?></td><td></td><td></td><td></td><td><input  type="button" class="btn btn-primary btn-sm"  value="MODIFICAR" onclick="window.location.href= 'modificarCategoria.php?idC=<?php echo $r['id'] ?>'">  <input  type="button" class="btn btn-danger btn-sm"  value="BORRAR" onclick="borrarCategoria(<?php echo $r['id'] ?>)"></td>
								</tr>
								<?php
							}?>
						</table>		
		
					</div>
	            </div>
					
			</div>
					

                  
       	</div>
   	</div>


  </body>
</html>













































<?php

	
	

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