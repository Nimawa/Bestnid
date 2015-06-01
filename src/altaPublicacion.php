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
                <strong> Alta de Publicación </strong>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-4">
                    
          </div>
          <div class="col-xs-6 col-md-8">
            <form action="altaEfectivaPublicacion.php" method="post"  data-toggle="validator" class="form-horizontal"  id="alta" enctype="multipart/form-data" >
              Aclaracion: Los campos con (*) son obligatorios <br><br>
              <div class="form-group">
                  <label for="titulo" class="col-lg-2 control-label">Título: *</label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Título" data-error=" Ingrese un dato Valido!">
                    <div class="help-block with-errors"></div>   
              	</div>
              </div>
              <div class="form-group">
                  <label for="descripcion" class="col-lg-2 control-label">Descripción: *</label>
                 	<div class="col-lg-4">
                		<textarea  type="text" class="form-control" rows= "4" id="descripcion" name="descripcion" required placeholder="Descripcion" data-error=" Ingrese un dato Valido!"></textarea>
                 	<div class="help-block with-errors"></div>   
           	  	</div>
              </div>
              <div class="form-group">
                <label for="categoria" class="col-lg-2 control-label">Categoría: * </label>
                <div class="col-lg-4">
                  <select name="categoria" > 
  								  <?php
                  
      								require 'conexion.php';
                      $conexion=conectar();
    								  $registros=mysql_query("SELECT * FROM categoria " ,$conexion) or die("Problemas en el select:".mysql_error($conexion));
    								  
                      while ($reg=mysql_fetch_array($registros)){
    									?>		
    									<option selected value= "<?php echo $reg['id']?>" ><?php echo $reg['nombre'];?></option>		
    									<?php		
    								  }?>

                  </select> 
                </div>
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
         								<input type="file" name="archivos[]"  data-error=" Ingrese un dato Valido!"><br />
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
                <label for="piso" class="col-lg-2 control-label">Días de publicación: *</label>
                <div class="col-lg-2">
                  <input type="number" class="form-control" id="fecha" name="fecha" min="1" max="30"  required="required">
                </div>
              </div>
              <div class="form-group" >
                <div class="col-lg-10">
                  <button type="button" class="btn btn-default" style=" margin-left: 100px;" onClick="window.location = '/bestnid/index.php';" >Cancelar</button>
                  <input type="submit"  class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar">
                </div>
              </div>
                       
                       
            </form>    
            </div>
          </div>           
    </div>
  </div>
</body>
</html>