<?php


	
	require 'conexion.php';
	$conexion=conectar();
	$var="<script>document.getElementById('eliminar').value</script>";
	echo ($var);
	/*

$tit=$_REQUEST['titulo'];
$des=$_REQUEST['descripcion'];
$num=$_REQUEST['fecha'];
$fec_act=date("Y-m-d");
$id_usuario=$_SESSION["id"]; 
$id_categoria=$_REQUEST['categoria'];
$fec= date("Y-m-d", strtotime("$fec_act + $num days"));  
	

	mysql_query("INSERT INTO publicacion(titulo, descripcion, fecha_inicio, fecha_fin, id_usuario, id_categoria) 
	VALUES ('$tit','$des','$fec_act','$fec','$id_usuario','$id_categoria')", $conexion)
	or die("Problemas en el select:".mysql_error());
	$idnuevo = mysql_insert_id($conexion);

    for ($i = 0; $i < $tot; $i++){
		//$nom = $_FILES['archivos']['name'][$i];
		$imagen_temporal = $_FILES['archivos']['tmp_name'][$i];
		$nom = $_FILES['archivos']['type'][$i];
		//extraigo la extension de la foto
		$ext = end(explode('/', $nom));
		//echo ($ext);
		//archivo temporal en binario
		$itmp = fopen($imagen_temporal, 'r+b');
		$imagen = fread($itmp, filesize($imagen_temporal));
		fclose($itmp);
		//escapando los caracteres
		$imagen = mysql_real_escape_string($imagen);
		mysql_query("INSERT INTO foto(id_publicacion, foto, tipo_foto) VALUES ('$idnuevo', '$imagen', '$ext')",$conexion);
	}
	mysql_close($conexion);
	header("location: /bestnid/index.php");
*/
?> 
