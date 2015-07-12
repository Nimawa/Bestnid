
<?php   
$email=$_REQUEST['email'];


require 'conexion.php';
$conexion=conectar();

$verificaEmail=mysql_query(" SELECT count(id) as cantidad from usuario where mail='$email' ",$conexion) or die("Problemas en el select:".mysql_error());
$cantEmail=mysql_fetch_array($verificaEmail);
if($cantEmail['cantidad']==0){
			?><script language="javascript">
           window.history.back();
            </script><?php

}else{	
		$enlace='cambioContrasena.php?u='.$email;
		$asunto='Reestablecer contraseña - Bestnid';
		$cuerpo='Usted ha solicitado reestablecer su contraseña para modificarla haga click en el sigiente enlace <a href="'.$enlace.'" target="blank">Restablecer Contraseña </a><br> Si usted no solicito el cambio pongase en contacto a la brevedad con los administradores del sitio'; 


		mysql_query("	INSERT INTO mail(de, para, asunto, cuerpo) 
						VALUES ('no-reply@Bestnid.com.ar','$email','$asunto','$cuerpo')", $conexion)	or die("Problemas en el select:".mysql_error());

		header("location: index.php?cont=1 ");
}


?>