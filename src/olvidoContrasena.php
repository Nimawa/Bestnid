<!DOCTYPE html>
<html lang="en">

  <body onload="verificarCorreo2()"> 
    
    <?php include '../src/head.php';?>
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
                        <strong style="">  Recuperar Contraseña </strong>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                </div>
                <div class="col-xs-6 col-md-8">
                    <form action="mailCambioContrasena.php" method="post" data-toggle="validator" class="form-horizontal"  id="formularioAltaUsuario" >
                        <div class="form-group">
                            <label for="email" class="col-lg-2 control-label">Email: * </label>
                            <div class="col-lg-4">
                                <input  class="form-control" id="email" name="email" required placeholder="ejemplo@mail.com" pattern="[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+" data-error=" Ingrese una direccion de correo electronico Valida!" >
                                <div id="respuesta" class="help-block with-errors"></div> 
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="col-lg-10">
                              <button type="button" class="btn btn-default" style=" margin-left: 100px;" onclick="window.location.href='panel.php'">Cancelar</button>
                              <input type="submit" class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar" onmouseover="verificarCorreo2();">
                            </div>
                        </div>

                       
                       
                    </form>    
                </div>
            </div>
            
        </div>
    </div>
        
        

    
    
  </body>
</html>



