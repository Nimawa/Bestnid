<?php
function getFoto($v1, $v2) 
{
 $sth = mysql_query(" SELECT * FROM foto 
		         WHERE id_publicacion = $v1"
					       ,$v2)or
      die("problema de select".mysql_error());
        $res=mysql_fetch_array($sth);
		
       echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['foto'] ).'"/>'."<br>";
}

?>