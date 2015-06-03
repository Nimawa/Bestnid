
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
                    <?php include 'listadoCategorias.php';?>  
                </div>
                <div  class="col-xs-12 col-sm-6 col-md-8">
                  <?php include 'listarProductos.php';?>  
                  
                </div>
            </div>
        </div>
    </diV>


    <!-- Si retorna Codigo=1, se regresa del alta de usuario, por lo tanto informa de ello-->
    <?php
        if (isset($_REQUEST['u'])){
          if ($_REQUEST['u']==1) {
            ?>  
            <script language="javascript">
            bootbox.alert("Su cuenta de usuario ha sido creada exitosamente, Inicie Sesion con su E-mail y contraseña.",null);
            </script>
          <?php 
          }else if ($_REQUEST['u']==2) {
            ?> <!-- Si retorna Codigo=2, el mail esta utilizado por otro usuario--> 
            <script language="javascript">
            bootbox.alert("El email ingresado se encuentra registrado! Ingrese nuevamente sus datos",null);
            </script>
          <?php
          }

          if ($_REQUEST['u']==3) {
            ?>  
            <script language="javascript">
            bootbox.alert("Usuario o contraseña incorrecta.",null);
            </script>
          <?php 
          }
        }
      if (isset($_REQUEST['o'])){
          if ($_REQUEST['o']==1) {
            ?>  
            <script language="javascript">
            bootbox.alert("La oferta se ha realizado correctamente..",null);
            </script>
          <?php 
          }
        }    
        
    ?>
    
    
   





  </body>
</html>
