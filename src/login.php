
<?php
include 'head.php';
session_start();
require 'conexion.php';
$conexion=conectar();


$usuarios=mysql_query("SELECT * FROM usuario WHERE mail='$_REQUEST[user]'", $conexion);
if(($user_ok = mysql_fetch_array($usuarios)) and ($user_ok['pass']==$_REQUEST['pass'])){
    $_SESSION['user'] = $user_ok["mail"]; 
    $_SESSION['pass'] = $user_ok["pass"];
    $_SESSION['id'] = $user_ok["id"]; 
    $_SESSION['nombre'] = $user_ok["nombre"];
    $_SESSION['apellido'] = $user_ok["apellido"]; 
    $_SESSION['estado'] = true;
      
         header("location: index.php");


}else{
        header("location: index.php?u=3 ");
        $_SESSION['estado'] =false; 
    }


?> 

