<?php

	include 'head.php';
	require 'conexion.php';
	require 'validarSesion.php';
	$conexion=conectar();
	$id_usuario=$_SESSION["id"]; 
  $fec_act=date("Y-m-d");  
	$_SESSION['$a']=(" Select * from publicacion a ");

	$reg=mysql_query(" Select * FROM oferta AS ofer INNER JOIN publicacion AS publi WHERE ofer.id_usuario=$id_usuario  AND ofer.id_publicacion=publi.id ORDER BY ofer.ganador desc" ,$conexion)or die("problema de select".mysql_error());
	
	      $totalFilas=mysql_num_rows($reg);  
      if($totalFilas==0){
                  ?>
                    <div class="row" style="margin: 20px; background-color: #EEEEEE">
                          <h4 class="col-xs-10 col-md-10">No existen resultados</h4>
                      </div><br>
                  <?php
              }
      while($r=mysql_fetch_array($reg)){
        if( $r['fecha_fin'] < $fec_act){ 
          ?>
          <ul class="media-list" >
            <li class="media" >
              <a class="pull-left" href="#" >
                  <div class="thumbnail" style=" border: 3px #333; float: left; height: 10em; margin: .2em 1em 1em 0; overflow: hidden;  width: 10em;" >
                    <img class="media-object"  ><?php getFoto($r['id'], $conexion); ?> </img>
                  </div>
              </a>
           
              <div class="media-body">
                <h4 class="media-heading"  ><?php echo $r['titulo'];?> </h4>
                <?php echo $r['descripcion']. "<br>"; ?> 
                <?php echo 'Fecha de inicio: '.acomodarFecha($r['fecha_inicio']). "<br>"; ?> 
                <?php echo 'Fecha de fin: '.acomodarFecha($r['fecha_fin'])."<br>"; ?> 
                Categoria: <?php $a= $r['id_categoria'];
                $regi=mysql_query(" Select nombre from categoria where id= $a ",$conexion)
                or die("problema de select".mysql_error());
                   if($x=mysql_fetch_array($regi)){
                      echo $x['nombre'];  
                   }
                if ($r['ganador']=='true') {
                  ?><div>
                      <strong><h3><font color="red">Usted ganó esta subasta.</font></h3></strong>
                    </div>
                  <?php
                }
                    ?> 
              </div>
              <a class="pull-right" >  
                    <input  type="button" class="btn btn-danger btn-sm" style=" margin-top: 10px;" value="VER PUBLICACION" onclick="window.location.href='verPublicacion.php?idPublicacion=<?php echo $r['id'];?>'">
              </a>                              
            </li><hr>
          </ul>
         
      <?php  
      }
	   
  }?>

<?


	mysql_close($conexion);
?> 