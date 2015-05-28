
<?php

session_start();
require 'conexion.php';
$conexion=conectar();


$usuarios=mysql_query("SELECT * FROM usuario WHERE mail='$_REQUEST[user]'", $conexion);
if(($user_ok = mysql_fetch_array($usuarios)) and ($user_ok['pass']==$_REQUEST['pass'])){
    $_SESSION['user'] = $user_ok["mail"]; 
    $_SESSION['pass'] = $user_ok["pass"];
    $_SESSION['estado'] = true; 
    header("location: ../index.php?u=4 ");

}else{
        header("location: ../index.php?u=3 ");
        $_SESSION['estado'] =false; 
    }


?> 

