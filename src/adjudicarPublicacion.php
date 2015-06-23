
<?php   
$idOferta=$_REQUEST['idOferta'];
require 'conexion.php';
require 'sql/enviarMailAdjudicacion.php';
$conexion=conectar();

mysql_query("update oferta set ganador='true' where id=$idOferta",$conexion) or die("Problemas en el select:".mysql_error());
enviarMailAdjudicacion($idOferta,$conexion);
header("location: usuarioMiCuenta.php?o=1 ");
?>


