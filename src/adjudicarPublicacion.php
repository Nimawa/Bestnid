
<?php   
$idOferta=$_REQUEST['idOferta'];

require 'conexion.php';
$conexion=conectar();

mysql_query("update oferta set ganador='true' where id=$idOferta",$conexion) or die("Problemas en el select:".mysql_error());

header("location: usuarioMiCuenta.php?o=1 ");
?>


