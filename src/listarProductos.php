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
	  
	  $aux= conectar();
	  $reg=mysql_query(" Select *
	                     from publicacion
					       ",$aux)or
      die("problema de select".mysql_error());
	  require 'imprimirPublicacion.php';
	  imprimirPublicacion($reg,$aux);
	  mysql_close($aux);
	 ?>

<body>
</body>
</html>
