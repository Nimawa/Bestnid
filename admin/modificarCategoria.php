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
                <div id="resultado" class="col-xs-12 col-sm-6 col-md-8">
                  
<?php
    require '../src/conexion.php';
	
	$conexion=conectar();
	$idC=$_REQUEST['idC'];
	
	$reg=mysql_query(" Select * 
	FROM categoria c
	where c.id='$idC'
    " ,$conexion)or die("problema de select".mysql_error());
	$r=mysql_fetch_array($reg);
	?>         
				
				<div class="row" style="margin: 20px; background-color: #EEEEEE">
		            <h4 class="col-xs-10 col-md-10" > 
					<?php echo $r['nombre'];
					?>
					 <form action="modificarCategoriaValidacion.php?idC=<?php echo $r['id'];
					 ?>" method="post" data-toggle="validator" class="form-horizontal"  id="formularioAltaCategoria" >
					<input  class="form-control" id="nombre" name="nombre" required placeholder="Nombre (solo letras)" pattern="[a-zA-Z]+" data-error="Complete correctamente este campo">
					 <button type="button" class="btn btn-default" style=" margin-left: 100px;" onClick="window.location.href='panel.php'">Cancelar</button>
                              <input type="submit" class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar">
					</h4>
		        </div>
				<br>
		    
<?php
        if (isset($_REQUEST['c'])){
          if ($_REQUEST['c']==2) {
            ?>  
            <script language="javascript">
            bootbox.alert("La categoria ingresada ya existe.",null);
            </script>
			<?php
			}
			}
			?>
			
			 </div>
            </div>
        </div>
    </diV>