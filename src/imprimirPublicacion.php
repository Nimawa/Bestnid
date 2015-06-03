<?php

 
//primero recibe el registro de consulta y en el segundo la coneccion a la base
 function imprimirPublicacion($v1,$v2){    
      require 'acomodarFecha.php';
      require 'sql/getFoto.php';
      while($r=mysql_fetch_array($v1)){
        if(( $r ['baja'] == false )or ($r ['baja'] =='false')){ 
          ?>
          <ul class="media-list" >
            <li class="media" >
              <a class="pull-left" href="#" >
                  <div class="thumbnail" style=" border: 3px #333; float: left; height: 10em; margin: .2em 1em 1em 0; overflow: hidden;  width: 10em;" >
                    <img class="media-object"  ><?php getFoto($r['id'], $v2); ?> </img>
                  </div>
              </a>
              <div class="media-body">
                <h4 class="media-heading" style="margin: .2em 1em 1em 0; overflow: hidden;  width: 10em;" ><?php echo $r['titulo'];?> </h4>
                <?php echo $r['descripcion']; ?> 
              </div>
                <?php echo 'Fecha de inicio: '.acomodarFecha($r['fecha_inicio']). "<br>"; ?> 
                <?php echo 'Fecha de fin: '.acomodarFecha($r['fecha_fin'])."<br>"; ?> 
      			    Categoria: <?php $a= $r['id_categoria'];
      			    $reg=mysql_query(" Select nombre from categoria where id= $a ",$v2)or die("problema de select".mysql_error());
      			       if($x=mysql_fetch_array($reg)){
      				        echo $x['nombre'];  
                   }
              $id_publicacion=$r['id'];             //controla si hay ofertas, habilita y desabilita el boton
              $reg=mysql_query(" Select * from oferta where id_publicacion='$id_publicacion'  ",$v2)
              or die("problema de select".mysql_error());
              $comp=mysql_fetch_array($reg);
              ?>
              
               <a class="pull-right" >
                <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="MODIFICAR" onclick="window.location.href='modificarPublicacion.php?idPublicacion=<?php echo $r['id'];?>'" <? if($comp=="0"){echo 'enabled';} else{ echo 'disabled'; }?>> 
                <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="BORRAR" onclick="window.location.href='borrarPublicacion.php?idPublicacion=<?php echo $r['id'];?>'">
                <input  type="button" class="btn btn-danger btn-sm" style=" margin-top: 10px;" value="OFERTAR" onclick="window.location.href='solicitudOferta.php?idPublicacion=<?php echo $r['id'];?>'">
              </a>
                
                            
            </li><hr>
          </ul>
         
      <?php  }
      }?>
	  <div>

	   
	   
	   
	   
	   </div>
	   
	   
  <?php }

?>