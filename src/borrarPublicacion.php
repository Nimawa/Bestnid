<?php
require 'conexion.php';
$idpublicacion=$_REQUEST['idPublicacion'];
$conexion=conectar();
//$ida=$_REQUEST['ida'];
$ofe=mysql_query("SELECT * FROM oferta WHERE id_publicacion=$idpublicacion", $conexion) or
die("Problemas en el select:".mysql_error($conexion));
$comp=mysql_fetch_array($ofe);
	if ($comp==0) {			
		mysql_query("UPDATE publicacion SET baja='true' WHERE id=$idpublicacion", $conexion)
	or die("Problemas en el select:".mysql_error($conexion));
	?> <script language="javascript">
	window.location='/bestnid/index.php';
	alert("La publicacion se ha borrado satisfactoriamente!");
	</script>  <?php
	}else{
	?> <script language="javascript">
	alert("La publicacion No se puede borrar porque hay ofertas realizadas!");
	window.location='/bestnid/index.php';
	</script>  <?php
	}
mysql_close($conexion);

?> 