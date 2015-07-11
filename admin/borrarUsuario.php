<?php
require '../src/conexion.php';
$idusuario=$_REQUEST['idusuario'];
$admin=$_REQUEST['admin'];
$conexion= conectar();
$date=date("Y-m-d");
/*if ($admin=='false') {
	$ofer=mysql_query(" Select * FROM oferta WHERE id_usuario='$idusuario' AND ganador='false' AND baja='false'" ,$conexion)
		or die("problema de select".mysql_error());
		if (mysql_num_rows($ofer)!=0) {
			?> <script language="javascript">
			window.location='verUsuariosRegistrados.php?t=2';
			</script>  <?php
			return false;
		}
	$publi=mysql_query(" Select * FROM publicacion WHERE id_usuario='$idusuario' AND fecha_fin >= '$date' AND baja='false'" ,$conexion)
		or die("problema de select".mysql_error());	
		if (mysql_num_rows($publi)!=0) {
			?> <script language="javascript">
			window.location='verUsuariosRegistrados.php?t=3';
			</script>  <?php
			return false;
		}
}
$ofer=mysql_query(" Select * FROM oferta as ofer INNER JOIN publicacion as publi WHERE publi.fecha_fin >= '$date' AND ofer.id_usuario='$idusuario' AND ofer.baja='false' AND ofer.id_publicacion=publi.id" ,$conexion)
 or die("problema de select".mysql_error());
while ($reg=mysql_fetch_array($ofer)) {*/
	$sql="UPDATE oferta AS ofer INNER JOIN publicacion AS publi SET ofer.baja='true' WHERE ofer.id_usuario='$idusuario' AND publi.fecha_fin >= '$date' AND ofer.baja='false' AND ofer.id_publicacion=publi.id
"; mysql_query($sql) or die ("Problemas en el select:".mysql_error($conexion));

$sql="UPDATE publicacion SET baja='true' WHERE id_usuario='$idusuario' AND fecha_fin >= '$date' ";
 mysql_query($sql) or die ("Problemas en el select:".mysql_error($conexion));


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