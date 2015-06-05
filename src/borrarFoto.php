<?php


	require 'conexion.php';
	$conexion=conectar();
	$ida=$_REQUEST['ida'];
	$ofe=mysql_query("SELECT * FROM oferta WHERE id_publicacion=$ida", $conexion) or
				die("Problemas en el select:".mysql_error($conexion));
	$comp=mysql_fetch_array($ofe);
	if ($comp==0) {								//comprueba no se hayan hecho ofertas
	
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
	$num=mysql_query("SELECT * FROM foto WHERE id_publicacion=$ida", $conexion) or
				die("Problemas en el select:".mysql_error($conexion));
	$res=mysql_num_rows($num);
	if (!empty($_POST["arre"])) {
		$fot=count($_POST["arre"]);
		if($fot==$res && $vacio==0){ 				// controla que no se borren todas las fotos
			echo "<script language='JavaScript'>alert('Debe subir al menos una foto');</script>";
			echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
			return false;
		}
	}
	if (empty($_POST["arre"])) {	//controla que no se suban mas de cuatro fotos
		$foto=0;
	}else{
		$foto=count($_POST["arre"]);
	}
	if (($res + $tot) - $foto > 4){
		echo "<script language='JavaScript'>alert('No puede cargar mas de 4 fotos');</script>";
		echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
		return false;
	}
	
	if ($vacio!=0) {							// controla que se una imagen
		$permitidos = array("image/jpg", "image/jpeg","image/png");
		for ($i = 0; $i < $tot; $i++){
			if (!in_array($_FILES['archivos']['type'][$i], $permitidos) || $_FILES['archivos']['size'][$i] >= 2097152){		
				echo "<script language='JavaScript'>alert('El archivo no es jpe, jpeg, png o es mayor a 2048 kb');</script>";
				echo "<SCRIPT LANGUAGE=javascript> window.history.go(-1)</SCRIPT>";
				return false;
			}
		}
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
		
	}
	
	

    
		if (!empty($_POST["arre"])) {
		$foto=$_POST["arre"];
		$registros=mysql_query("SELECT id FROM foto", $conexion) or
		die("Problemas en el select:".mysql_error($conexion));
		while ($reg=mysql_fetch_array($registros)){
			for ($i=0; $i < count($foto); $i++) { 
				mysql_query("DELETE FROM foto WHERE id=$foto[$i]", $conexion) or
				die("Problemas en el select:".mysql_error($conexion));
			}
		}
	}
	
	
$tit=$_REQUEST['titulo'];
$des=$_REQUEST['descripcion'];
//$num=$_REQUEST['fecha'];
$fec_act=date("Y-m-d");
//$id_usuario=$_SESSION["id"]; 
$id_cat=$_REQUEST['categoria'];
//$fec= $_REQUEST['fecha'];  ;  
				
	mysql_query("UPDATE publicacion SET titulo='$tit', descripcion='$des', id_categoria='$id_cat' WHERE id=$ida", $conexion)
	or die("Problemas en el select:".mysql_error($conexion));



	mysql_close($conexion);
	?> <script language="javascript">
	alert("La publicacion se ha modificado satisfactoriamente!,");
	window.location='index.php';
	</script>  <?php
}else{
	?> <script language="javascript">
	alert("La publicacion No se puede modificar porque hay ofertas realizadas!,");
	window.location='index.php';
	</script>  <?php
}
?> 
