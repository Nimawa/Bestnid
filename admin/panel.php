
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
                <div id="resulta" class="col-xs-12 col-sm-6 col-md-8">
                  
                  
                </div>
            </div>
        </div>
    </diV>
    <?php
        if (isset($_REQUEST['u'])){
            if ($_REQUEST['u']==1) {
                    ?>  
                    <script language="javascript">
                    bootbox.alert("La cuenta de administrador ha sido creada exitosamente",null);
                    </script>
                  <?php 
            }
        }    
    ?>    
	<?php
 if (isset($_REQUEST['c'])){
          if ($_REQUEST['c']==1) {
            ?>  
            <script language="javascript">
            bootbox.alert("La categoria se ha modificado con exito.",null);
            </script>
			<?php
			}
			}
			?>
   </body>
</html>

