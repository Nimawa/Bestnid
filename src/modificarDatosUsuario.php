
<?php   
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$dni=$_REQUEST['dni'];
$telefono=$_REQUEST['telefono'];
$calle=$_REQUEST['calle'];
$nro=$_REQUEST['nro'];
$piso=$_REQUEST['piso'];
$depto=$_REQUEST['depto'];
$ciudad=$_REQUEST['ciudad'];
$pcia=$_REQUEST['pcia'];


require 'conexion.php';
$conexion=conectar();

mysql_query("update usuario set dni='$dni',nombre='$nombre',apellido='$apellido',telefono='$telefono',calle='$calle',nro='$nro',piso='$piso',depto='$depto',ciudad='$ciudad',pcia='$pcia'",$conexion) or die("Problemas en el select:".mysql_error());

header("location: index.php?u=5");
?>


