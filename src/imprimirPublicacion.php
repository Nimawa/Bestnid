<?php
//primero recibe el registro de consulta y en el segundo la coneccion a la base
 function imprimirPublicacion($v1,$v2){    
      require 'acomodarFecha.php';
      require 'sql/getFoto.php';
      while($r=mysql_fetch_array($v1)){
        if(( $r ['baja'] == false )or ($r ['baja'] =='false')){ 
          ?>
          <ul class="media-list">
            <li class="media">
              <a class="pull-left" href="#" >
                  <img class="media-object" ><?php getFoto($r['id'], $v2); ?> </img>
              </a>
              <div class="media-body">
                <h4 class="media-heading"><?php echo $r['titulo']; ?> </h4>
                <?php echo $r['descripcion']; ?> 
              </div>
              <?php echo 'Fecha de inicio: '.acomodarFecha($r['fecha_inicio']). "<br>"; ?> 
              <?php echo 'Fecha de fin: '.acomodarFecha($r['fecha_fin']); ?> 
            </li>
          </ul>
          <?php

        }
      }
  }
?>
