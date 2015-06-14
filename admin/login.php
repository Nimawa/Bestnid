
<?php
include '../src/head.php';
session_start();
require '../src/conexion.php';
$conexion=conectar();


$usuarios=mysql_query("SELECT * FROM usuario WHERE mail='$_REQUEST[user]'", $conexion);
if(($user_ok = mysql_fetch_array($usuarios)) and ($user_ok['pass']==$_REQUEST['pass'])and ($user_ok['admin']=="true")){
    $_SESSION['admin_user'] = $user_ok["mail"]; 
    $_SESSION['admin_pass'] = $user_ok["pass"];
    $_SESSION['admin_id'] = $user_ok["id"]; 
    $_SESSION['admin_nombre'] = $user_ok["nombre"];
    $_SESSION['admin_apellido'] = $user_ok["apellido"]; 
    $_SESSION['admin_estado'] = true;
      
         header("location: panel.php");


}else{
        header("location: index.php?u=3 ");
        $_SESSION['admin_estado'] =false; 
    }


?> 



























