
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
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass2'];

require 'conexion.php';
$conexion=conectar();

mysql_query("	INSERT INTO usuario (mail,dni,nombre,apellido,telefono,calle,nro,piso,depto,ciudad,pcia,pass)
             	VALUES ('$email','$dni','$nombre','$apellido','$telefono','$calle','$nro','$piso','$depto','$ciudad','$pcia','$pass')",$conexion) or die("Problemas en el select:".mysql_error());

header("location: ../index.php?u=1 ");
?>


