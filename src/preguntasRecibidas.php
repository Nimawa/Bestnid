
<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	require 'imprimirPublicacion.php';

	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 
	$lista=mysql_query("  SELECT distinct id_publicacion, p.id_usuario
       FROM  publicacion p
           INNER JOIN 
		  consulta c ON (p.id = c.id_publicacion) 
		  where p.id_usuario= $id_usuario and baja = false
		 
		  ",$conexion)or die("problema de select".mysql_error());
		  
		  if (mysql_num_rows($lista)==0) {
			?>
    		<div class="row" style="margin: 20px; background-color: #EEEEEE">
	            <h4 class="col-xs-10 col-md-10">No existen resultados</h4>
	        </div><br>
	    <?php
		}else
		while($registros=mysql_fetch_array($lista)){
			$id_publicacion_actual=$registros['id_publicacion'];
			$publicacion=mysql_query(" select * from publicacion where id=$id_publicacion_actual " ,$conexion)
			or die("problema de select".mysql_error());
			imprimirPublicacion($publicacion,$conexion);
			$preguntas=mysql_query("  SELECT * from consulta where id_publicacion=$id_publicacion_actual
            ",$conexion)or die("problema de select".mysql_error());
			?>
			<?php
		    while($reg=mysql_fetch_array($preguntas))
			{
			 ?>
			 			<div class="row" style="margin-top: 20px; background-color: #EEEEEE">
				       		<h4 class="col-xs-12 col-md-12">Pregunta: <?php echo $reg['pregunta']?></h4>
				       	
						<?php if($reg['respuesta']<> null) {?>
			 			
	                 		<h4 class="col-xs-12 col-md-12">Respuesta: <?php echo $reg["respuesta"]?></h4>
                  		</div>


                        <?php }else {
						      ?>
	      				
							<h4 class="col-xs-12 col-md-12">Respuesta:<br><br>  
							<form method="post"  action="altaRespuesta.php?idConsulta=<?php echo $reg["id"];?>" data-toggle="validator">		  
								<div class="row col-xs-10 col-md-10">
									<textarea type="text" class="form-control  "  rows= "1" id="respuesta" name="respuesta" required placeholder="Escriba aqui su respuesta"  data-error="Complete correctamente este campo" ></textarea>						
								</div>
								<a class="pull-right" >  
			                   			<input  type="submit" class="btn btn-primary btn-sm" style="" value=" RESPONDER" onclick="window.location.href='#'">
			              		</a>
							</form> 
				       		</h4>
	             
				 	</div><br>
	             <?php
	         	}//fin del else
				
				}// fin del segundo while
				
		} //fin de el principal while
		echo '<hr>';


	mysql_close($conexion);
	
	
	
	?>