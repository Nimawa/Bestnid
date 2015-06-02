<!DOCTYPE html>
<html lang="en">

  <body>
    
    <?php include 'head.php';?>
    <?php include 'navegacion.php';?>
	
                 <div class="col-xs-6 col-md-4">
                    <a style=" color: #000; font-style:italic; font-size: 20px; ">
                        <strong> BESTNID </strong>
                    </a>
                    <a href="#"> <img src="../Img/logo.png" > </a>
					
                </div>
			
	<div  class="col-xs-12 col-sm-6 col-md-8">


<?php
require 'conexion.php';
require 'imprimirPublicacion.php';
$aux= conectar();
$var= $_SESSION['$a'];
 if($_REQUEST['ordenar']== 'porCategoria')
         
     {    
	     if($_REQUEST['radio2']=='creciente')
	      {$reg=mysql_query(" $var 
		                     order by a.id_categoria DESC
					       ",$aux)or
           die("problema de select".mysql_error());
		   }else
		   {
		   $reg=mysql_query(" $var 
		                     order by a.id_categoria ASC
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
       
  imprimirPublicacion($reg,$aux); 
?>
</div>
<body>
</body>
</html>