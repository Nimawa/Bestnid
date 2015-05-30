<?php   
    include 'head.php';
	include 'navegacion.php';
	?>
	<div class="col-xs-6 col-md-4">
                    <a style=" color: #000; font-style:italic; font-size: 20px; ">
                        <strong> BESTNID </strong>
                    </a>
                    <a href="#"> <img src="../Img/logo.png" > </a>
                </div>
	<div  class="col-xs-12 col-sm-6 col-md-8">
<?php
    require 'conexion.php';
	require 'sql/funcionesDeBusqueda.php';
	require 'imprimirPublicacion.php';
	$aux=conectar();
	$reg=mysql_query(" Select * From publicacion",$aux)or die("problema de select".mysql_error());
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
								  ",$aux)or die("problema de select".mysql_error());
			}else
			   if ($_REQUEST['radio1']=='titulo') 
	       {              $reg=mysql_query(" Select * From publicacion a 
			                     inner 	 join 
							     ( $tabla1) b 
								  on (a.id = b.id) 
								  inner join
								  ($tabla3) c
								   on (c.id = a.id)
								  ",$aux)or die("problema de select".mysql_error());
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
								  ",$aux)or die("problema de select".mysql_error());
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
								 ",$aux)or die("problema de select".mysql_error());
			  
			  
			  }
		     if( ($_REQUEST['idCategoria']=='0')and( $_REQUEST['campoBusqueda']<>null))
			 {
			     if ($_REQUEST['radio1']=='titulo') 
	             {             $reg=mysql_query(" Select * From publicacion a 
			                       inner join
								  ($tabla3) c
								   on (c.id = a.id)
								  ",$aux)or die("problema de select".mysql_error());
								  }
			      else
	           if ($_REQUEST['radio1']=='descripcion') 
	       {              $reg=mysql_query(" Select * From publicacion a 
			                      
								  inner join
								  ($tabla2) c
								   on (c.id = a.id)
								  ",$aux)or die("problema de select".mysql_error());
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
								  ",$aux)or die("problema de select".mysql_error());
			 }
	}
		
		
		
	imprimirPublicacion($reg, $aux);
	mysql_close($aux);
 ?>

</div>
