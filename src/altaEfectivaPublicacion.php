<?php



$tit=$_REQUEST['titulo'];
$des=$_REQUEST['descripcion'];
$fec=$_REQUEST['fecha'];
$fec_act=date("Y-m-d");
$id_usuario=1;
$id_categoria=$_REQUEST['categoria'];
	
				
	mysqli_query($con, "INSERT INTO publicacion(titulo, descripcion, fecha_inicio, fecha_fin, id_usuario, id_categoria) 
	VALUES ('$tit','$des','$fec_act','$fec','$id_usuario','$id_categoria')")
	or die("Problemas en el select:".mysql_error());
	$idnuevo = mysqli_insert_id($con);

 if ( isset ($_FILES["archivos"]) ) {
 	$tot = count($_FILES["archivos"]["name"]);
	$permitidos = array("image/jpg", "image/jpeg","image/png");
    for ($i = 0; $i < $tot; $i++){

		if (in_array($_FILES['archivos']['type'][$i], $permitidos) && $_FILES['archivos']['size'][$i] <= 2097152){
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
		mysqli_query($con, "INSERT INTO foto(id_publicacion, foto, tipo_foto) VALUES ('$idnuevo', '$imagen', '$ext')");

	//	$tip=$_REQUEST['ext'];
		}else{
			echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de 2048 Kilobytes";
			return false;
		}
	}
}else{
	echo "vacio";
	return false;
}


	
	mysqli_close($con);
?> 