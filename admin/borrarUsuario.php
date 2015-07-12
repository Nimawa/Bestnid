<?php
require '../src/conexion.php';
require '../src/head.php';
$idusuario=$_REQUEST['idusuario'];
$admin=$_REQUEST['admin'];
$conexion= conectar();
$date=date("Y-m-d");
$id=$_SESSION['admin_id'];
if ($idusuario==$id) {
	echo "<script language='JavaScript'>alert('No se puede eliminar Ud. mismo!');</script>";
	echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
	return false;
}

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