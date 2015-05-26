<?php
	function conectar(){
		$conexion=mysql_connect ("181.170.74.137","bestnid","bestnid123456") or die("Problemas en la conexion");
		mysql_select_db("bestnid",$conexion) or  die("Problemas en la selección de la base de datos");
		mysql_query("SET NAMES 'utf8'");
	return $conexion;
							}
?>
