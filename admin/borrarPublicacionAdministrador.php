<?php
require '../src/conexion.php';
$idpublicacion=$_REQUEST['idPublicacion'];
$conexion= conectar();
echo ($conexion);
$sql="UPDATE publicacion SET baja='true' WHERE id=$idpublicacion";
mysql_query($sql) or die ("Problemas en el select:".mysql_error($conexion));

?>
<script language="javascript">
	alert('La publicacion ha sido borrada!');
	window.location='panel.php';
	</script>  <?php
mysql_close($conexion);

?> 