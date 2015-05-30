
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
	                    
	                </div>
	                <div class="col-xs-6 col-md-8">
						<?php
					    
						require 'sql/funcionesDeBusqueda.php';
						require 'imprimirPublicacion.php';
						$conexion=conectar();
						$reg=mysql_query(" Select * From publicacion",$conexion)or die("problema de select".mysql_error());
					     $tabla1=filtrarPorCategoria($_REQUEST['idCategoria']);
						 $tabla2= filtrarPorDescripcion($_REQUEST['campoBusqueda']);  
					     $tabla3= filtrarPorTitulo($_REQUEST['campoBusqueda']);
						 if( ($_REQUEST['idCategoria']<>'0')and( $_REQUEST['campoBusqueda']<>null))
						    {               
								if ($_REQUEST['radio1']== 'ambas')  
								   
								    {      $reg=mysql_query(" (Select * From publicacion a 
								                     inner join 
												     ( $tabla1) b 
													  on (a.id = b.id) 
													  inner join
													  ($tabla2) c
													   on (c.id = a.id))
													   UNION
													   (Select * From publicacion a 
								                     inner join 
												     ( $tabla1) b 
													  on (a.id = b.id) 
													  inner join
													  ($tabla3) c
													   on (c.id = a.id))
													  ",$conexion)or die("problema de select".mysql_error());
								}else
								   if ($_REQUEST['radio1']=='titulo') 
						       {              $reg=mysql_query(" Select * From publicacion a 
								                     inner 	 join 
												     ( $tabla1) b 
													  on (a.id = b.id) 
													  inner join
													  ($tabla3) c
													   on (c.id = a.id)
													  ",$conexion)or die("problema de select".mysql_error());
													  }
						   else
						           if ($_REQUEST['radio1']=='descripcion') 
						       {              $reg=mysql_query(" Select * From publicacion a 
								                     inner 	 join 
												     ( $tabla1) b 
													  on (a.id = b.id) 
													  inner join
													  ($tabla2) c
													   on (c.id = a.id)
													  ",$conexion)or die("problema de select".mysql_error());
								}
							
								 
						}
						   //else del if mayor
						    else
							    if( ($_REQUEST['idCategoria']<>'0')and( $_REQUEST['campoBusqueda']==null))
								  {
								        $reg=mysql_query(" Select * From publicacion a 
								                     inner 	 join 
												     ( $tabla1) b 
													  on (a.id = b.id) 
													 ",$conexion)or die("problema de select".mysql_error());
								  
								  
								  }
							     if( ($_REQUEST['idCategoria']=='0')and( $_REQUEST['campoBusqueda']<>null))
								 {
								     if ($_REQUEST['radio1']=='titulo') 
						             {             $reg=mysql_query(" Select * From publicacion a 
								                       inner join
													  ($tabla3) c
													   on (c.id = a.id)
													  ",$conexion)or die("problema de select".mysql_error());
													  }
								      else
						           if ($_REQUEST['radio1']=='descripcion') 
						       {              $reg=mysql_query(" Select * From publicacion a 
								                      
													  inner join
													  ($tabla2) c
													   on (c.id = a.id)
													  ",$conexion)or die("problema de select".mysql_error());
								}
								else
								   if ($_REQUEST['radio1']== 'ambas')  
								   
								    {      $reg=mysql_query(" (Select * From publicacion a 
								                      inner join
													  ($tabla2) c
													   on (c.id = a.id))
													   UNION
													   (Select * From publicacion a 
								                     inner join
													  ($tabla3) c
													   on (c.id = a.id))
													  ",$conexion)or die("problema de select".mysql_error());
								 }
						}
							
							
							
						imprimirPublicacion($reg, $conexion);
						mysql_close($conexion);
					 ?>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>

