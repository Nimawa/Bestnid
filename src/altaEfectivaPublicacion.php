<?php

	
	include 'head.php';
	require 'conexion.php';
	$conexion=conectar();



	$tot=count($_FILES["archivos"]["name"]);
	for ($i=$tot; $i > 0 ; $i--) { 				//controla si arreglo de fotos tiene fotos
		$pet=$_FILES["archivos"]["name"][$i-1];
		if (!$pet==null) {
			$vacio=1;
			break;
		}else{
			$vacio=0;
		}
	}

	$permitidos = array("image/jpg", "image/jpeg","image/png");
	if($vacio==0){ 				// controla que no se borren todas las fotos
			echo "<script language='JavaScript'>alert('Debe subir al menos una foto');</script>";
			echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
			return false;
		}
	$tot=count($_FILES["archivos"]["name"]);	
	for ($i = 0; $i < $tot; $i++){
		/*$pet=$_FILES["archivos"]["name"][$i];
		if (!$pet==null) {*/
			
		if (!in_array($_FILES['archivos']['type'][$i], $permitidos) || $_FILES['archivos']['size'][$i] >= 2097152){		
			echo "<script language='JavaScript'>alert('El archivo no es jpe, jpeg, png o es mayor a 2048 kb');</script>";
			echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
			return false;
			}
		/*}*/
	}

$tit=$_REQUEST['titulo'];
$des=$_REQUEST['descripcion'];
$num=$_REQUEST['fecha'];
$fec_act=date("Y-m-d");
$id_usuario=$_SESSION["id"]; 
$id_categoria=$_REQUEST['categoria'];
$fec= $_REQUEST['fecha'];  
	

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
	header("location: index.php?p=3");

?> 
