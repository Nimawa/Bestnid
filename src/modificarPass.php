
<?php
include 'head.php';
require 'conexion.php';
$conexion=conectar();
$pass=$_REQUEST['pass2'];

$usuarios=mysql_query("SELECT * FROM usuario WHERE mail='$_SESSION[user]'", $conexion);
if(($user_ok = mysql_fetch_array($usuarios)) and ($user_ok['pass']==$_REQUEST['actual'])and ($user_ok['baja']=="false")){
    mysql_query("update usuario set pass='$pass'WHERE mail='$_SESSION[user]'",$conexion) or die("Problemas en el select:".mysql_error());
 

         header("location: index.php?u=5");


}else{
        header("location: index.php?u=3 ");
    }


?> 

