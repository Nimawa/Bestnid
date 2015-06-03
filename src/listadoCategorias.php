<div class="list-group">
    <a href="#" class="list-group-item "></span><strong>CATEGORIAS</strong></a>
    <?php
          $cat=mysql_query(" SELECT cat.nombre, cat.id, count( pub.id ) as cantidad FROM categoria AS cat JOIN publicacion AS pub WHERE cat.id = pub.id_categoria AND pub.baja = 'false' GROUP BY cat.nombre",$conexion)or die("problema de select".mysql_error());
          while($categoria=mysql_fetch_array($cat)){
            ?>
            <a href="#" class="list-group-item" onclick="validarSesion()"><span class="badge"><?php echo $categoria['cantidad']; ?> </span><?php echo $categoria['nombre']; ?> </a><?php        
          } 
    ?>       
</div>