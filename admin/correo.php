<?php
	session_start();
	require '../src/conexion.php';
	$conexion=conectar();
	$correo=mysql_query("select * from mail where para='Contacto@Bestnid.com.ar' ",$conexion)or die("problema de select".mysql_error());
    while($mail=mysql_fetch_array($correo)){
    	echo 'de:' ,$mail['de'],'<br>';
    	echo 'para:' ,$mail['para'],'<br>';
    	echo 'fecha:' ,$mail['fecha'],'<br>';
    	echo 'Asunto:' ,$mail['asunto'],'<br>','<br>';
    	echo $mail['cuerpo'],'<br>','<hr>';
    }	
?>