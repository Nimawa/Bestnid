

<!DOCTYPE html>
<html lang="en">

  <body> 
    
   <?php include '../src/head.php';?>
        <?php include 'navegacion.php';?>
 
  

    <div style=" padding: 0 200px;">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <?php include 'areaAdministracion.php';?>  
                </div>
               <div  class="col-xs-12 col-sm-6 col-md-8">


                     <h3>
                        <strong style=""> Categorias existentes</strong>
                    </h3> 

                    <?php

                      require '../src/conexion.php';
                      $conexion=conectar();
                      $registros=mysql_query("SELECT * FROM categoria ORDER BY nombre asc" ,$conexion) or die("Problemas en el select:".mysql_error($conexion));
                      
                      while ($reg=mysql_fetch_array($registros)){
                        ?> 
                           <div class="row-fluid">
                             <div class="col-md-12 col-xs-12" style="">   
                              <h4> <?php echo $reg['nombre'];?></h4>  
                            </div>
                          </div>

                        <?php   
                      }?>
                    
                    
                    <h3 style=""> 
                       <strong style=""> Solicitud de Alta de Categoria </strong>
                    </h3>
                
                
                    <form action="altaCategoriaFuncionalidad.php" method="post" data-toggle="validator" class="form-horizontal"  id="formularioAltaCategoria" >
                       
                      <div class="form-group">
                            <label for="nombre" class="col-lg-2 control-label">Nombre: </label>
                            <div class="col-lg-4">
                              <input  class="form-control" id="nombre" name="nombre" required placeholder="Nombre" pattern="[a-zA-Z]+" data-error="Complete correctamente este campo">
							  <font color="red">
							  <?php
							     if(isset ($_REQUEST['c']))
								     if($_REQUEST['c']==2)
									    echo 'ya existe la categoria';
							  ?>
							  </font>
                              <div class="help-block with-errors"></div>   
                            </div>
                  </div>


                        <div class="form-group" >
                            <div class="col-lg-10">
                              <button type="button" class="btn btn-default" style=" margin-left: 100px;" onClick="window.location.href='panel.php'">Cancelar</button>
                              <input type="submit" class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar">
                            </div>
                        </div>

                       
                       
                    </form>    
                </div>
            </div>
            
        </div>
    </div>
        
              
    
    
    
  </body>
</html>

