<?php

function comprobarOferta($id_usuario, $id_publicacion, $conexion){

	if (isset($id_usuario)) {
		
		$reg=mysql_query(" Select * FROM oferta WHERE id_publicacion='$id_publicacion' AND id_usuario='$id_usuario' " ,$conexion)
		or die("problema de select".mysql_error());
		if (mysql_num_rows($reg)!=0) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}
?>