
<!DOCTYPE html>
<html lang="en">
  <body> 
        <?php 
	        include '../src/head.php';
	        require 'validarSesionAdmin.php';
	        include 'navegacion.php';
        ?>
 
<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#fecha1').datepicker({
                    format: "yyyy-mm-dd"
                });  
            
            });
</script>
<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#fecha2').datepicker({
                    format: "yyyy-mm-dd"
                });  
            
            });
</script>  

    <div style=" padding: 0 200px;">
        
        <div  class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <?php include 'areaAdministracion.php';?>  
                </div>
	            <div id="resulta" class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	            	<div  class="row">
	                    <h3>
	                        <strong style=""> Publicaciones Finalizadas  </strong> 
	                    </h3> Haga click en el campo para seleccionar una fecha.
                	</div> <br>   
	            	<div class="row">
						<form method="POST" data-toggle="validator" class="form-horizontal"  id="buscarUsuarios" >
	                        <div class="form-group col-lg-4 ">
	                            <label for="nombre" class="col-lg-5 control-label">Desde: *</label>
	                            <div class="col-lg-7">
                  				<input type="text" class="form-control" required id="fecha1" name="fecha1" value="2015-01-01" pattern="(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])" onFocus="javascript:this.value=''" >
	                              <div class="help-block with-errors"></div>   
	                            </div>
	                        </div>
	                        <div class="form-group col-lg-4 ">
	                            <label for="apellido" class="col-lg-5 control-label">Hasta: *</label>
	                            <div class="col-lg-7">
                  				<input type="text" class="form-control" required id="fecha2" name="fecha2" value="<?php echo date("Y-m-d")?>" pattern="(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])" onFocus="javascript:this.value=''">
	                              <div class="help-block with-errors"></div>   
	                            </div>
	                        </div>
	                        <div class="form-group  col-lg-2" >
	                            <div >
	                              <input type="button" class="btn btn-danger col-lg-12  btn-sm" style=" margin-left: 20px;" value="Buscar" onClick="usuariosRegistrados('listadoPublicacionesFinalizadas.php')">
	                            </div>
	                        </div>    
	                   	</form> 
	                </div>

	                <div class="row">
						<div id="resultado"></div>
	
					</div>
	            </div>
					
			</div>
					

                  
       	</div>
   	</div>
 
  </body>
</html>


