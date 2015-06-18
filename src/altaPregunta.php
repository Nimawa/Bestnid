<?php
    require 'conexion.php';
	require 'head.php';
	$conexion=conectar();
	$idPublicacion= $_REQUEST['idPublicacion'];
	$pregunta=$_REQUEST['pregunta'];
	$date=date("Y-m-d");
	if (isset($_SESSION["id"]))
	{
	     $idPreguntador=$_SESSION["id"];
	}
	    
		 $altaPregunta=mysql_query(" INSERT INTO consulta(id, id_usuario, id_publicacion, pregunta, respuesta,fecha) 
		 VALUES (null,'$idPreguntador','$idPublicacion','$pregunta',null,'$date')  ",$conexion)or die("problema de select".mysql_error());
		  
  header("location: verPublicacion.php?idPublicacion=$idPublicacion");
?>