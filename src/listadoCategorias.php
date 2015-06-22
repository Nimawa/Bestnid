<div class="list-group">
    <a href="#" class="list-group-item " onclick="window.location.href='index.php'"></span><strong>CATEGORIAS</strong></a>
    <?php
    		require 'conexion.php';
            require 'sql/getCategoria.php';
              $date=date("Y-m-d");
            $conexion= conectar();
          $cat=mysql_query(" SELECT cat.nombre, cat.id, count( pub.id ) as cantidad FROM categoria AS cat JOIN publicacion AS pub WHERE cat.id = pub.id_categoria AND pub.baja = 'false' and pub.fecha_fin > '$date' GROUP BY cat.nombre",$conexion)or die("problema de select".mysql_error());
          while($categoria=mysql_fetch_array($cat)){
              if(isset($_REQUEST['categoria']) and $_REQUEST['categoria']==$categoria['id']){
                ?><a href="#" class="list-group-item active" onclick="window.location.href='filtrador.php?categoria=<?php echo $categoria['id'];?>'"><span class="badge"><?php echo $categoria['cantidad']; ?> </span><?php echo $categoria['nombre']; ?> </a><?php        
                }
                else{
                    ?><a href="#" class="list-group-item" onclick="window.location.href='filtrador.php?categoria=<?php echo $categoria['id'];?>'"><span class="badge"><?php echo $categoria['cantidad']; ?> </span><?php echo $categoria['nombre']; ?> </a><?php        

                }
          }

              
          
    ?>       
</div>

