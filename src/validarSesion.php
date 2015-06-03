<?php

  	if(!isset($_SESSION['estado']) and $_SESSION['estado'] != true){
  		header("Location: index.php?u=4");
  	}
?>