<?php

  	if(!isset($_SESSION['admin_estado']) and $_SESSION['admin_estado'] != true){
  		header("Location: index.php?u=4");
  	}
?>