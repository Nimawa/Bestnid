
<!DOCTYPE html>
<html lang="en">
  <body> 
        <?php include 'head.php';?>
        <?php include 'navegacion.php';?>
        <?php include 'busqueda.php';?>  
        

    <div style=" padding: 0 200px;">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <?php include 'areaUsuario.php';?>
                </div>
                <div  class="col-xs-12 col-sm-6 col-md-8">
                    <div  id="resultado" ></div>    
                  
                </div>
            </div>
        </div>
    </diV>
	<?php
        if (isset($_REQUEST['r'])){
          if ($_REQUEST['r']==1) {
            ?>  
            <script language="javascript">
            bootbox.alert("La respuesta ha sido enviada",null);
            </script>
          <?php 
          }
        }
        if (isset($_REQUEST['o'])){
          if ($_REQUEST['o']==1) {
            ?>  
            <script language="javascript">
            bootbox.alert("La publicacion ha sido adjudicada correctamente",null);
            </script>
          <?php 
          }
        }         
                       
	?>
  </body>
</html>

