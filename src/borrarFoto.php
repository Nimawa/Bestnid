<?php


	
	require 'conexion.php';
	$conexion=conectar();
$ida=$_REQUEST['ida'];
	//var_dump($_FILES["archivos"]);

	
	//$tot= $_FILES["archivos"]["name"][0];
	//echo ($tot);
	$tot=count($_FILES["archivos"]["name"]);
	for ($i=$tot; $i > 0 ; $i--) { 
		$pet=$_FILES["archivos"]["name"][$i-1];
		if (!$pet==null) {
			$vacio=1;
			break;
		}else{
			$vacio=0;
		}
	}
	$num=mysql_query("SELECT * FROM foto WHERE id_publicacion=$ida", $conexion) or
				die("Problemas en el select:".mysql_error($conexion));
	$res=mysql_num_rows($num);
	$cant=count($_POST["arre"]);
	echo ($cant);
	
/*
	if(!empty($_POST["arre"])){
		$fot=$_POST["arre"];
		$registros=mysql_query("SELECT id FROM foto", $conexion) or
		die("Problemas en el select:".mysql_error($conexion));
		while ($reg=mysql_fetch_array($registros)){
			for ($i=0; $i < count($fot); $i++) { 
				mysql_query("DELETE FROM foto WHERE id=$fot[$i]", $conexion) or
				die("Problemas en el select:".mysql_error($conexion));
			}
		}
	}



	if (empty($_POST["arre"]) && $vacio==0 ) {
		echo "<script language='JavaScript'>alert('Debe subir al menos una foto');</script>";
		echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
		return false;
	}else 
		}
	}
	$permitidos = array("image/jpg", "image/jpeg","image/png");
	for ($i = 0; $i < $tot; $i++){
		if (!in_array($_FILES['archivos']['type'][$i], $permitidos) || $_FILES['archivos']['size'][$i] >= 2097152){		
			echo "<script language='JavaScript'>alert('El archivo no es jpe, jpeg, png o es mayor a 2048 kb');</script>";
			echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
			return false;
			}
	}
}
	
	

	
$ida=$_REQUEST['ida'];	
$tit=$_REQUEST['titulo'];
$des=$_REQUEST['descripcion'];
$num=$_REQUEST['fecha'];
$fec_act=date("Y-m-d");
//$id_usuario=$_SESSION["id"]; 
$id_cat=$_REQUEST['categoria'];
$fec= date("Y-m-d", strtotime("$fec_act + $num days"));  
				
	mysql_query("UPDATE publicacion SET titulo='$tit', descripcion='$des', id_categoria='$id_cat', fecha_fin='$fec' WHERE id=$ida", $conexion)
	or die("Problemas en el select:".mysql_error($conexion));



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
		mysql_query("INSERT INTO foto(id_publicacion, foto, tipo_foto) VALUES ('$ida', '$imagen', '$ext')",$conexion);
	}
	mysql_close($conexion);
	header("location: /bestnid/index.php");
*/
?> 
