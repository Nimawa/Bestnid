<?php   
require 'conexion.php';
$conexion=conectar();
$monto=$_REQUEST['monto'];
$id_oferta=$_REQUEST['idoferta'];
	mysql_query("UPDATE oferta SET monto='$monto' WHERE id='$id_oferta'", $conexion)
	or die("Problemas en el select:".mysql_error($conexion));
	mysql_close($conexion);
	?> <script language="javascript">
	alert("La oferta se ha modificado satisfactoriamente!");
	window.location='usuarioMiCuenta.php';
	</script>  <?php
?>