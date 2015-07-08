

<!DOCTYPE html>
<html lang="en">

  <body > 
    
    <?php include 'head.php';?>
    <?php include 'navegacion.php';?>

<?php

    require 'conexion.php';
    $conexion=conectar();
    $idUsuario=$_SESSION['id'];
    $registros=mysql_query("Select * from usuario where id=$idUsuario", $conexion) 
         or die("Problemas en el select:".mysql_error($conexion));
        $usuario=mysql_fetch_array($registros);
?>
    
      
      
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
                        <strong style="">  Modificar Mis Datos </strong>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                </div>
                <div class="col-xs-6 col-md-8">
                    <form action="modificarPass.php" method="post" data-toggle="validator" class="form-horizontal"  id="ormularioAltaUsuario" >
                        Aclaracion: Los campos con (*) son obligatorios <br><br>
                        <div class="form-group">
                            <label for="actual" class="col-lg-4 control-label">Contraseña Actual: * </label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="actual" name="actual"  placeholder="De 6 a 15 caracteres" required pattern="[\s\S]{6,15}" value="<?php echo $usuario['pass']?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass1" class="col-lg-4 control-label">Contraseña Nueva: * </label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="pass1" name="pass1"  placeholder="De 6 a 15 caracteres" required pattern="[\s\S]{6,15}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass2" class="col-lg-4 control-label">Repetir Contraseña: * </label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="pass2" name="pass2" placeholder="De 6 a 15 caracteres" required data-match="#pass1" data-error=" Las contraseñas no coinciden o no respetan la cantidad de caracteres solicitados." pattern="[\s\S]{6,15}" >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="col-lg-10">
                              <button type="button" class="btn btn-default" style=" margin-left: 100px;" onclick="window.location.href='index.php'">Cancelar</button>
                              <input type="submit" class="btn btn-danger" style=" margin-left: 20px;" value="Modificar">
                            </div>
                        </div>

                       
                       
                    </form>    
                </div>
            </div>
            
        </div>
    </div>
        
        

    
    
  </body>
</html>
<script type="text/javascript">
var listener = new window.keypress.Listener();
listener.simple_combo("ctrl b", function() {
    console.log("You pressed shift and s");
    window.location='index.php';
});
</script>



