<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
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
