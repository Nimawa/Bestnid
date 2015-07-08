<?php
require '../src/conexion.php';
$conexion=conectar();
$idCategoria=$_REQUEST['idCategoria'];

$categoriaUsada=mysql_query("SELECT * FROM publicacion p 
WHERE id_categoria=$idCategoria", $conexion) or
die("Problemas en el select:".mysql_error($conexion));
$cantidad=mysql_fetch_array($categoriaUsada);

if ($cantidad==0) {			
		mysql_query("UPDATE categoria SET baja='true' WHERE id=$idCategoria", $conexion)
	or die("Problemas en el select:".mysql_error($conexion));
	?> <script language="javascript">
	window.location='panel.php?c=3';
	</script>  <?php
	}else{
	?> <script language="javascript">
	window.location='panel.php?c=2';
	</script>  <?php
	}
mysql_close($conexion);

?>