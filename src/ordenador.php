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
			
					<div  class="col-xs-12 col-sm-6 col-md-8">


						<?php
						
						require 'imprimirPublicacion.php';
						$aux= conectar();
						$var= $_SESSION['$a'];
						 if($_REQUEST['ordenar']== 'porCategoria')
						         
						     {    
							     if($_REQUEST['radio2']=='creciente')
							      {$reg=mysql_query(" select * from categoria c
								                     inner join ($var) a
													 on (a.id_categoria= c.id)
								                     order by c.nombre ASC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   }else
								   {
								   $reg=mysql_query(" select * from categoria c
								                     inner join ($var) a
													 on (a.id_categoria= c.id)
								                     order by c.nombre DESC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   
								   
								   }
							       
							   
							 }else
							   if($_REQUEST['ordenar']== 'porFechaInicio')
						         
						     {    
							     if($_REQUEST['radio2']=='creciente')
							      {$reg=mysql_query(" $var
								                     order by a.fecha_inicio ASC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   }else
								   {
								   $reg=mysql_query(" $var
								                     order by a.fecha_inicio DESC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   
								   
								   }
							       
							   
							 }else
							   if($_REQUEST['ordenar']== 'porFechaFin')
						         
						     {    
							     if($_REQUEST['radio2']=='creciente')
							      {$reg=mysql_query(" $var
								                     order by a.fecha_Fin ASC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   }else
								   {
								   $reg=mysql_query(" $var
								                     order by a.fecha_Fin DESC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   
								   
								   }
								
						}   else

						      if($_REQUEST['ordenar']== 'porDescripcion')
						         
						     {    
							     if($_REQUEST['radio2']=='creciente')
							      {$reg=mysql_query(" $var
								                     order by a.descripcion ASC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   }else
								   {
								   $reg=mysql_query(" $var
								                     order by a.descripcion DESC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   
								   
								   }
						   } else
						   
						      if($_REQUEST['ordenar']== 'porTitulo')
						         
						     {    
							     if($_REQUEST['radio2']=='creciente')
							      {$reg=mysql_query(" $var
								                     order by a.titulo ASC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   }else
								   {
								   $reg=mysql_query(" $var
								                     order by a.titulo DESC
											       ",$aux)or
						           die("problema de select".mysql_error());
								   
								   
								   }
							  }
							  include 'ordenarPublicaciones.php';       
							  imprimirPublicacion($reg,$aux);

							?>
						</div>
					</div>
				</div>
		</div>
	</body>
</html>

