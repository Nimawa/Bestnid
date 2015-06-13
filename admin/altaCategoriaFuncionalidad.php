<?php   
include '../src/head.php';
$nombreCategoria=$_REQUEST['nombre'];

require '../src/conexion.php';
$conexion=conectar();

$verificaCategoria=mysql_query(" SELECT count(nombre) as cantidad from categoria where nombre='$nombreCategoria' ",$conexion) or die("Problemas en el select:".mysql_error());
$cantNombreCategoria=mysql_fetch_array($verificaCategoria);
if($cantNombreCategoria['cantidad']==1){
    header("location: altaCategoriaVisualizacion.php?c=2 ");
    
}else
{

mysql_query("	INSERT INTO categoria (id,nombre)
             	VALUES (null,'$nombreCategoria')",$conexion) or die("Problemas en el select:".mysql_error());

header("location: panel.php?c=1 ");
}
?>
