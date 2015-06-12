<?php
session_start();

unset($_SESSION['user']);
unset($_SESSION['pass']);
unset($_SESSION['id']);
unset($_SESSION['nombnre']);
unset($_SESSION['apellido']);
unset($_SESSION['estado']);

header("Location: index.php");

?>