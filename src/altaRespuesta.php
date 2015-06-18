<?php
include 'head.php';
require 'conexion.php';
$conexion=conectar();
$id_consulta=$_REQUEST['idConsulta'];
 $consulta=mysql_query("SELECT * from consulta where id= $id_consulta",$conexion)or die("problema de select".mysql_error());
 $con=mysql_fetch_array($consulta);
$pregunta=$con['pregunta'];
$respuesta=$_REQUEST['respuesta'];
$id_usuario=$con['id_usuario'];
$id_publicacion=$con['id_publicacion'];
$date= date("Y-m-d");			
			
	mysql_query("	UPDATE consulta  SET respuesta = '$respuesta'
                    WHERE id =$id_consulta",$conexion)or die("problema de select".mysql_error());
	header("location: usuarioMiCuenta.php?r=1");	
			
?>

   

