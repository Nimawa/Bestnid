<?php
	function conectar(){
		$conexion=mysql_connect("http://bestnid.ddns.net","bestnid","bestnid123456") or die("Problemas en la conexion");
		mysql_select_db("bestnid",$conexion) or  die("Problemas en la selección de la base de datos");
		mysql_query("SET NAMES 'utf8'");
	return $conexion;
							}
?>
