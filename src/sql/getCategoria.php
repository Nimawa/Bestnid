<?php
   function getCategoria($v1)
   {
    $reg = mysql_query(" SELECT *
	                   FROM categoria 
		         "
					       ,$v1)or
      die("problema de select".mysql_error());
	  
	   while($r=mysql_fetch_array($reg))
   {       
                echo '<option value="'.$r['id'].'" selected>'.$r['nombre'].'</option>';
		
   }
   echo '<option value="0" selected></option>';
}
?>