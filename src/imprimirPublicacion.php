<?php
//primero recibe el registro de consulta y en el segundo la coneccion a la base
 function imprimirPublicacion($v1,$v2)
 {
      require 'sql/getFoto.php';
      while($r=mysql_fetch_array($v1))
   {   $aux=$r ['baja'];
      if(( $r == false )or ($r =='false'))
     {  
        echo 'Titulo: '.$r['titulo']. "<br>";
		echo 'Descripcion: '.$r['descripcion']. "<br>";
		 echo 'Fecha de inicio: '.$r['fecha_inicio']. "<br>";
		  echo 'Fecha de fin: '.$r['fecha_fin']. "<br>";
		    getFoto($r['id'], $v2);
		"<br>";
     }
   }
 
 
 }
?>
