<?php
require '../src/conexion.php';
$idusuario=$_REQUEST['idusuario'];
$admin=$_REQUEST['admin'];
$conexion= conectar();
$date=date("Y-m-d");
echo ($conexion);
if ($admin=='false') {
	$ofer=mysql_query(" Select * FROM oferta WHERE id_usuario='$idusuario' AND ganador='false' AND baja='false'" ,$conexion)
		or die("problema de select".mysql_error());
		if (mysql_num_rows($ofer)!=0) {
			?> <script language="javascript">
			window.location='verUsuariosRegistrados.php?t=2';
			</script>  <?php
		}
	$publi=mysql_query(" Select * FROM publicacion WHERE id_usuario='$idusuario' AND fecha_fin >= '$date'" ,$conexion)
		or die("problema de select".mysql_error());	
		if (mysql_num_rows($publi)!=0) {
			?> <script language="javascript">
			window.location='verUsuariosRegistrados.php?t=3';
			</script>  <?php
		}
}


$sql="UPDATE usuario SET baja='true' WHERE id=$idusuario";
mysql_query($sql) or die ("Problemas en el select:".mysql_error($conexion));
if ($admin=='false') {
	?> <script language="javascript">
	window.location='verUsuariosRegistrados.php?t=1';
	</script>  <?php
}else{
?> <script language="javascript">
	window.location='verAdministradoresRegistrados.php?t=1';
	</script>  <?php
}	
mysql_close($conexion);

?> 