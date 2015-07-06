<?php
require '../src/conexion.php';
$idusuario=$_REQUEST['idusuario'];
$conexion= conectar();
echo ($conexion);
$sql="UPDATE usuario SET baja='true' WHERE id=$idusuario";
mysql_query($sql) or die ("Problemas en el select:".mysql_error($conexion));

?> <script language="javascript">
	window.location='panel.php?t=1';
	</script>  <?php
	
mysql_close($conexion);

?> 