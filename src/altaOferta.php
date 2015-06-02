
<?php 
session_start();
$idUsuario=$_SESSION['id'];  
$monto=$_REQUEST['monto'];
$motivos=$_REQUEST['motivos'];
$idPublicacion=$_REQUEST['idPublicacion'];

require 'conexion.php';
$conexion=conectar();


mysql_query("	INSERT INTO oferta (id_usuario,id_publicacion, monto, descripcion)
             	VALUES ('$idUsuario','$idPublicacion','$monto','$motivos')",$conexion) or die("Problemas en el select:".mysql_error());

header("location: ../index.php?o=1 ");
?>
