<?php
include 'head.php';
$email=$_REQUEST['email'];

require 'conexion.php';
$conexion=conectar();

$verificaEmail=mysql_query(" SELECT count(id) as cantidad from usuario where mail='$email' ",$conexion) or die("Problemas en el select:".mysql_error());
$cantEmail=mysql_fetch_array($verificaEmail);
if($cantEmail['cantidad']==1){
	?><a style='color: red'>El correo ingresado se encuentra registrado</a><?php
	}


?>