<?php
session_start();

unset($_SESSION['admin_user']);
unset($_SESSION['admin_pass']);
unset($_SESSION['admin_id']);
unset($_SESSION['admin_nombnre']);
unset($_SESSION['admin_apellido']);
unset($_SESSION['admin_estado']);

header("Location: index.php");

?>