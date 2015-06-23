   <?php
    function enviarMailAdjudicacion($idOferta,$conexion){
    	$ofe=mysql_query("select * from oferta where id=$idOferta ",$conexion)or die("problema de select".mysql_error());
    	$oferta=mysql_fetch_array($ofe);
    	$publi=$oferta['id_publicacion'];
    	$pub=mysql_query("select * from publicacion where id=$publi ",$conexion)or die("problema de select".mysql_error());
    	$publicacion=mysql_fetch_array($pub);
    	$upubli=$publicacion['id_usuario'];
    	$uofer=$oferta['id_usuario'];
    	$usuarioPublicacion=mysql_query("select * from usuario where id=$upubli ",$conexion)or die("problema de select".mysql_error());
    	$usuario1=mysql_fetch_array($usuarioPublicacion);
    	$usuarioOferente=mysql_query("select * from usuario where id=$uofer ",$conexion)or die("problema de select".mysql_error());
		$usuario2=mysql_fetch_array($usuarioOferente);
		$asuntoOferente='Su oferta por el articulo '.$publicacion['titulo'].' ha sido elegida como ganadora';
		$cuerpoOferente='Felicitaciones! Su oferta por el articulo '.$publicacion['titulo'].' ha sido elegida como ganadora <br> le facilitaremos los datos del vendedor para que se ponga en contacto: <br> Nombre: '.$usuario1['nombre'].' <br> Apellido:'.$usuario1['apellido'].' <br> Telefono: '.$usuario1['telefono'].'<br> Ponganse en contacto con el vendedor a la brevedad.'; 
		$asuntoPublicacion='Ha adjudicado la publicacion '.$publicacion['titulo'];
		$cuerpoPublicacion='Felicitaciones! Ha adjudicado la publicacion '.$publicacion['titulo'].' El monto de la oferta adjudicada es $ '.$oferta['monto'].' <br> le facilitaremos los datos del oferente para que se ponga en contacto: <br> Nombre: '.$usuario2['nombre'].' <br> Apellido:'.$usuario2['apellido'].' <br> Telefono: '.$usuario2['telefono'].'<br> Ponganse en contacto con el comprador a la brevedad.'; 
		mysql_query("	INSERT INTO mail(de, para, asunto, cuerpo) 
						VALUES ('Bestnid@Bestnid.com.ar','$usuario2[mail]','$asuntoOferente','$cuerpoOferente')", $conexion)	or die("Problemas en el select:".mysql_error());
		mysql_query("	INSERT INTO mail(de, para, asunto, cuerpo) 
						VALUES ('Bestnid@Bestnid.com.ar','$usuario1[mail]','$asuntoPublicacion','$cuerpoPublicacion')", $conexion)	or die("Problemas en el select:".mysql_error());
	}
    ?>