
<!DOCTYPE html>
<html lang="en">
  <body> 
        <?php include '../src/head.php';?>
        <?php include 'navegacion.php';?>
<?php
  if (isset($_REQUEST['t'])){
          if ($_REQUEST['t']==1) {
            ?>  
            <script language="javascript">
            bootbox.alert("La publicacion se ha borrado con exito!",null);
            </script>
          <?php  
          }
        }
?>
    <div style=" padding: 0 200px;">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <?php include 'areaAdministracion.php';?>  
                </div>
                <div id="resultado" class="col-xs-12 col-sm-6 col-md-8">
                  
                  
                </div>
            </div>
        </div>
    </diV>
 

   
  </body>
</html>

