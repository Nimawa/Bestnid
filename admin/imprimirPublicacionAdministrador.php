<?php

 
//primero recibe el registro de consulta y en el segundo la coneccion a la base
 function imprimirPublicacionAdmin($v1,$v2){ 

      $fecha_hoy=date("Y-m-d");
      $totalFilas=mysql_num_rows($v1);  
      if($totalFilas==0){
                  echo("No existen resultados");
              }
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
                <h4 class="media-heading"  ><?php echo $r['titulo'];?> </h4>
                <?php echo $r['descripcion']. "<br>"; ?> 
                <?php echo 'Fecha de inicio: '.acomodarFecha($r['fecha_inicio']). "<br>"; ?> 
                <?php echo 'Fecha de fin: '.acomodarFecha($r['fecha_fin'])."<br>"; if($r['fecha_fin']<$fecha_hoy){ echo '<a style="color:red"> Publicacion Finalizada </a>'; echo '<br>';};?> 
                Categoria: <?php $a= $r['id_categoria'];
                $reg=mysql_query(" Select nombre from categoria where id= $a ",$v2)or die("problema de select".mysql_error());
                   if($x=mysql_fetch_array($reg)){
                      echo $x['nombre'];  
                   }
                    ?>   
              </div>
              <div class="pull-right" >  
                    <a  class="btn btn-danger btn-sm" style=" margin-top: 10px;" onclick="return confirm('Seguro quiere eliminar la publicacion?')" href="borrarPublicacionAdministrador.php?idPublicacion=<?php echo $r['id'];?>">ELIMINAR</a>
                    <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="VER PUBLICACION" onclick="window.location.href='verPublicacionAdmin.php?idPublicacion=<?php echo $r['id'];?>'">
              </div>                              
            </li><hr>
          </ul>
         
      <?php  }
      }
   }



function imprimirPublicacionFinalizadaAdmin($v1,$v2){    
      $fecha_hoy=date("Y-m-d");
      $totalFilas=mysql_num_rows($v1);  
      if($totalFilas==0){
                 ?>
                    <div class="row" style="margin: 20px; background-color: #EEEEEE">
                          <h4 class="col-xs-10 col-md-10">No existen resultados</h4>
                      </div><br>
                  <?php
              }
      while($r=mysql_fetch_array($v1)){
        if(( $r ['baja'] == true )or ($r ['baja'] =='true')){ 
          ?>
          <ul class="media-list" >
            <li class="media" >
              <a class="pull-left" href="#" >
                  <div class="thumbnail" style=" border: 3px #333; float: left; height: 10em; margin: .2em 1em 1em 0; overflow: hidden;  width: 10em;" >
                    <img class="media-object"  ><?php getFoto($r['id'], $v2); ?> </img>
                  </div>
              </a>
           
              <div class="media-body">
                <h4 class="media-heading"  ><?php echo $r['titulo'];?> </h4>
                <?php echo $r['descripcion']. "<br>"; ?> 
                <?php echo 'Fecha de inicio: '.acomodarFecha($r['fecha_inicio']). "<br>"; ?> 
                <?php echo 'Fecha de fin: '.acomodarFecha($r['fecha_fin'])."<br>"; 
         echo '<a style="color:red"> Publicacion Eliminadas </a>'; echo '<br>';?> 
                Categoria: <?php $a= $r['id_categoria'];
                $reg=mysql_query(" Select nombre from categoria where id= $a ",$v2)or die("problema de select".mysql_error());
                   if($x=mysql_fetch_array($reg)){
                      echo $x['nombre'];  
                   }
                    ?> 
              </div>
              <a class="pull-right" >  
                    <input  type="button" class="btn btn-danger btn-sm" style=" margin-top: 10px;" value="VER PUBLICACION" onclick="window.location.href='verPublicacionAdmin.php?idPublicacion=<?php echo $r['id'];?>'">
              </a>                              
            </li><hr>
          </ul>
         
      <?php  }
      }?>
    <div>

     
     
     
     
     </div>
     
     
  <?php }





?>

