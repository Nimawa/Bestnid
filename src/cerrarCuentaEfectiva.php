<?php
include 'head.php';
require '../src/conexion.php';
require 'validarSesion.php';
$idusuario=$_SESSION['id'];
$conexion= conectar();
$date=date("Y-m-d");



	$ofer=mysql_query(" Select * FROM oferta WHERE id_usuario='$idusuario' AND ganador='false' AND baja='false'" ,$conexion) or die("problema de select".mysql_error());
		if (mysql_num_rows($ofer)!=0) {
			?> <script language="javascript">
			window.location='usuarioMiCuenta.php?s=1';
			</script>  <?php
		}
	$publi=mysql_query(" Select * FROM publicacion WHERE id_usuario='$idusuario' AND fecha_fin >= '$date' AND baja='false'" ,$conexion)
		or die("problema de select".mysql_error());	
		if (mysql_num_rows($publi)!=0) {
			?> <script language="javascript">
			window.location='usuarioMiCuenta.php?s=2';
			</script>  <?php
		}



$sql="UPDATE usuario SET baja='true' WHERE id=$idusuario";
mysql_query($sql) or die ("Problemas en el select:".mysql_error($conexion));
/*echo "<script language='JavaScript'>alert('Se ha cerrado su cuenta con exito!');</script>";*/
    $_SESSION['estado'] = false;

?> <script language="javascript">
	window.location='index.php?s=3';
	</script>  <?php

/*
?> <script language="javascript">
	window.location='index.php?s=3';
	</script>  <?php*/

mysql_close($conexion);


?> 