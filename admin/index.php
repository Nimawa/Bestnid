
<!DOCTYPE html>
<html lang="en">
  <body> 
        <?php include '../src/head.php';?>
 

    <div style=" padding: 200px 300px;">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <a style=" color: #000; font-style:italic; font-size: 20px; ">
              <strong> Administracion </strong>
          </a>
          <a href="../index.php"> <img src="../Img/logo.png" > </a>
          <a style=" color: #000; font-style:italic; font-size: 20px; ">
              <strong> BESTNID </strong>
          </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" > 
          <form class="form-horizontal " role="form" method="post"  action="login.php">
            <div class="form-group ">
              <label class="sr-only" for="ejemplo_email_2">Email</label>
              <input type="email" class="form-control" id="user" name="user"
                     placeholder="Introduce tu email">
            </div>
            <div class="form-group">
              <label class="sr-only" for="ejemplo_password_2">Contraseña</label>
              <input type="password" class="form-control" id="pass" name="pass" 
                     placeholder="Contraseña">
            </div>
            
            <button type="submit" class="btn btn-danger btn-sm btn-block">INGRESAR</button>
          </form>
          
        </div>  
        
  
        
    </diV>


   





  </body>
</html>

<!-- Si retorna Codigo=1, se regresa del alta de usuario, por lo tanto informa de ello-->
    <?php
        if (isset($_REQUEST['u'])){
          if ($_REQUEST['u']==3) {
            ?>  
            <script language="javascript">
            bootbox.alert("Usuario o contraseña incorrecta.",null);
            </script>
          <?php 
          }
        }
        if (isset($_REQUEST['u'])){
          if ($_REQUEST['u']==4) {
            ?>  
            <script language="javascript">
            bootbox.alert("Debe iniciar sesion.",null);
            </script>
          <?php 
          }
        }

