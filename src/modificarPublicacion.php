<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navegacion.php';?>
  <div style=" padding: 0 200px;">
    <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6 col-md-4">
            <a style=" color: #000; font-style:italic; font-size: 20px; ">
                <strong> BESTNID </strong>
            </a>
            <a href="../index.php"> <img src="../Img/logo.png" > </a>
          </div>

          <div  class="col-xs-12 col-sm-6 col-md-8">
            <h3>
                <strong> Modificar Publicación </strong>
            </h3>
          </div>
        </div>
        <?php
      
        require 'acomodarFecha.php';
        require 'conexion.php';
        $conexion=conectar();
        $idpublicacion=$_REQUEST['idPublicacion'];

        $registros1=mysql_query("SELECT * FROM publicacion AS publi INNER JOIN categoria AS cat ON publi.id_categoria = cat.id INNER JOIN foto AS fot ON publi.id = fot.id_publicacion WHERE publi.id=$idpublicacion", $conexion) 
         or die("Problemas en el select:".mysql_error($conexion));
        $reg1=mysql_fetch_array($registros1);
    ?>

        <div class="row">
          <div class="col-xs-6 col-md-4">
                    
          </div>
          <div class="col-xs-6 col-md-8">
            <form action="borrarFoto.php" method="post"  data-toggle="validator" name="form" class="form-horizontal"  id="alta" enctype="multipart/form-data" >
              Aclaracion: Los campos con (*) son obligatorios <br><br>
              <div class="form-group">
                  <label for="titulo" class="col-lg-2 control-label">Título: *</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Título" data-error=" Ingrese un dato Valido!" value="<?php echo $reg1['titulo'];?>">
                    <div class="help-block with-errors"></div>   
              	</div>
              </div>
              <div class="form-group">
                  <label for="descripcion" class="col-lg-2 control-label">Descripción: *</label>
                 	<div class="col-lg-4">
                		<textarea  type="text" class="form-control" rows= "4" id="descripcion" name="descripcion" required placeholder="Descripcion" data-error=" Ingrese un dato Valido!">"<?php echo $reg1['descripcion'];?>"</textarea>
                 	<div class="help-block with-errors"></div>   
           	  	</div>
              </div>
              <div class="form-group">
                <label for="categoria" class="col-lg-2 control-label">Categoría: * </label>
                <div class="col-lg-4">
                  <select name="categoria" > 
  								        <?php
    						    		  $registros=mysql_query("SELECT * FROM categoria " ,$conexion) 
                  or die("Problemas en el select:".mysql_error($conexion));
                  while ($reg=mysql_fetch_array($registros)){
        				      if ($reg['id']==$reg1['id_categoria']){
                        ?><option selected value= "<?php echo $reg['id']?>" ><?php echo $reg['nombre'];?></option><?php
                        }else{
                         ?><option value= "<?php echo $reg['id']?>" ><?php echo $reg['nombre'];?></option><?php
                        }           
                  } ?>    
                  </select> 
                </div>
              </div>
              <div class="form-group">
                <?php
                $regis=mysql_query("SELECT * FROM foto", $conexion)
                 or die("Problemas en el select:".mysql_error($conexion));
                while ($re=mysql_fetch_array($regis)) {
                 if ($re['id_publicacion'] == $idpublicacion) {
                 ?>
                   <div>
                   <a class="pull-left" href="#" >
                    <div style=" display: inline-block; border: 3px #333; float: left; height: 12em; margin: .2em 1em 1em 0; overflow: hidden;width: 12em;" >
                      <?php  echo '<img  class="media-object" src="data:image/jpeg;base64,'.base64_encode( $re['foto'] ).'"/>'."<br>";?>
                    </div>
                    <div style="display: block">
                      <input type="checkbox"  name="arre[]" value="<?php echo $re['id']?>" />
                    </div>
                   </a>
                   </div>
                     <?php
                }
                }?>
              </div>



              <div class="form-group">
                <label for="fotos" class="col-lg-2 control-label">Fotos: * </label>
                <div class="col-lg-8">
                  <dl>  
    								<!-- Esta div contendrá todos los campos file que creemos -->
     								<dd>
                      <div id="adjuntos" >
           							<!-- Hay que prestar atención a esto, el nombre de este campo debe siempre terminar en []
          							como un vector, y ademas debe coincidir con el nombre que se da a los campos nuevos 
          							en el script -->
         								<input type="file" name="archivos[]"><br />
         								<div class="help-block with-errors"></div>  
      								</div>
                    </dd>
      								<dt>
                        <a href="#" onClick="addCampo()">Seleccionar otra foto</a>
                      </dt>
  							  </dl>
                </div>
              </div>
               <div class="form-group">             
                <label for="piso" class="col-lg-2 control-label">Fecha fin de publicación:</label> 
                <div class="col-lg-2"><br><br>
                 <?php echo acomodarFecha($reg1['fecha_fin']);?>
                </div>
               </div>
               <div class="form-group">
                <label for="piso" class="col-lg-2 control-label">Cambiar fecha finalización: *</label>
                <div class="col-lg-4">
                  <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date("Y-m-d")?>"  max="<?php echo date("Y-m-d", strtotime("+ 30 days"))?>">
                </div>
              </div>
              <div class="form-group" >
                <div class="col-lg-10">
                  <button type="button" class="btn btn-default" style=" margin-left: 100px;" onClick="window.location = '/bestnid/index.php';" >Cancelar</button>
                  <input type="submit"  class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar">
                </div>
              </div>
              <input type="hidden" name="ida" id="ida" value="1">    
  
                       
            </form>    
            </div>
          </div>           
    </div>
  </div>
</body>
</html>