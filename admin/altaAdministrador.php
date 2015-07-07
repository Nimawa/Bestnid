
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
$fecha_hoy=date("Y-m-d");

require '../src/conexion.php';
$conexion=conectar();

$verificaEmail=mysql_query(" SELECT count(id) as cantidad from usuario where mail='$email' ",$conexion) or die("Problemas en el select:".mysql_error());
$cantEmail=mysql_fetch_array($verificaEmail);
if($cantEmail['cantidad']==1){
			?><script language="javascript">
           window.history.back();
            </script><?php

}

mysql_query("	INSERT INTO usuario (mail,dni,nombre,apellido,telefono,calle,nro,piso,depto,ciudad,pcia,pass,fecha_alta,admin)
             	VALUES ('$email','$dni','$nombre','$apellido','$telefono','$calle','$nro','$piso','$depto','$ciudad','$pcia','$pass','$fecha_hoy','true')",$conexion) or die("Problemas en el select:".mysql_error());

header("location: panel.php?u=1 ");
?>


