
<?php   
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$telefono=$_REQUEST['telefono'];
$email=$_REQUEST['email'];
$comentario=$_REQUEST['comentario'];
$asunto='Nuevo mensaje de '.$nombre.'';
$cuerpo='Nombre:'.$nombre.'<br> Apellido: '.$apellido.' <br> Telefono:'.$telefono.' <br> Mail: '.$email.'<br> Comentarios: '.$comentario.''; 


require 'conexion.php';
$conexion=conectar();

mysql_query("	INSERT INTO mail(de, para, asunto, cuerpo) 
						VALUES ('$email','Contacto@Bestnid.com.ar','$asunto','$cuerpo')", $conexion)	or die("Problemas en el select:".mysql_error());

header("location: index.php?c=1 ");
?>