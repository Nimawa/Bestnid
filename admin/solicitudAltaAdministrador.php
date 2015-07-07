

<!DOCTYPE html>
<html lang="en">

  <body onload="verificarCorreo()"> 
    
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
                        <strong style="">  Solicitud de Alta de Usuario Administrador </strong>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                </div>
                <div class="col-xs-6 col-md-8">
                    <form action="altaAdministrador.php" method="post" data-toggle="validator" class="form-horizontal"  id="formularioAltaUsuario" >
                        Aclaracion: Los campos con (*) son obligatorios <br><br>
                        <div class="form-group">
                            <label for="nombre" class="col-lg-2 control-label">Nombre: *</label>
                            <div class="col-lg-4">
                              <input  class="form-control" id="nombre" name="nombre" required placeholder="Nombre" pattern="[a-zA-Z]+" data-error="Complete correctamente este campo">
                              <div class="help-block with-errors"></div>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-lg-2 control-label">Apellido: *</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Apellido" pattern="[a-zA-Z]+" data-error="Complete correctamente este campo" >
                              <div class="help-block with-errors"></div>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dni" class="col-lg-2 control-label">DNI: * </label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="dni" name="dni" required placeholder="Ej. 12456879"  pattern="[0-9]{7,8}"  data-error="Complete correctamente este campo" >
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-lg-2 control-label">Telefono: * </label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Ej. 221154568789" pattern="[0-9]{7,12}" data-error="Complete correctamente este campo" >
                              <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="calle" class="col-lg-2 control-label">Calle: * </label>
                            <div class="col-lg-3">
                              <input type="text" class="form-control" id="calle" name="calle" required placeholder="Calle" data-error="Complete este campo" >
                              <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">   
                            <label for="nro" class="col-lg-2 control-label">Nro: * </label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="nro" name="nro" required placeholder="Ej. 1234" pattern="[0-9]+" data-error="Complete correctamente este campo">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="piso" class="col-lg-2 control-label">Piso:  </label>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="piso" name="piso" placeholder="Ej. 2" pattern="[0-9]+" data-error="Complete correctamente este campo">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="depto" class="col-lg-2 control-label">Depto.:  </label>
                            <div class="col-lg-2">
                              <input type="text" class="form-control" id="depto" name="depto" placeholder="Ej. A" pattern="\b\w{1,2}\b" data-error="Máximo dos caracteres" >
                              <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ciudad" class="col-lg-2 control-label">Ciudad: * </label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="ciudad" name="ciudad" required placeholder="Ciudad" data-error="Complete este campo">
                              <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pcia" class="col-lg-2 control-label">Pcia: * </label>
                            <div class="col-lg-4">
                                <select name="pcia" class=field> 
                                    <option value="Buenos Aires">Buenos Aires</option> 
                                    <option value="Catamarca">Catamarca</option> 
                                    <option value="Chaco">Chaco</option> 
                                    <option value="Chubut">Chubut</option> 
                                    <option value="Corrientes">Corrientes</option> 
                                    <option value="Cordoba">Córdoba</option> 
                                    <option value="Distrito Federal">Capital Federal</option> 
                                    <option value="Entre Rios">Entre Ríos</option> 
                                    <option value="Formosa">Formosa</option> 
                                    <option value="Jujuy">Jujuy</option> 
                                    <option value="La Pampa">La Pampa</option> 
                                    <option value="La Rioja">La Rioja</option> 
                                    <option value="Mendoza">Mendoza</option> 
                                    <option value="Misiones">Misiones</option> 
                                    <option value="Neuquen">Neuquen</option> 
                                    <option value="Rio Negro">Río Negro</option> 
                                    <option value="Salta">Salta</option> 
                                    <option value="San Juan">San Juan</option> 
                                    <option value="San Luis">San Luis</option> 
                                    <option value="Santa Cruz">Santa Cruz</option> 
                                    <option value="Santa Fe">Santa Fe</option> 
                                    <option value="Santiago del Estero">Santiago del Estero</option> 
                                    <option value="Tierra del Fuego">Tierra del Fuego</option> 
                                    <option value="Tucuman">Tucumán</option> 
                                </select> 
                            </div>
                        </div>
                        Aclaracion: Su correo electronico sera su nombre de usuario<br><br>
                        <div class="form-group">
                            <label for="email" class="col-lg-4 control-label">Email: * </label>
                            <div class="col-lg-4">
                                <input  class="form-control" id="email" name="email" required placeholder="ejemplo@mail.com" pattern="[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+" data-error=" Ingrese una direccion de correo electronico Valida!" >
                                <div id="respuesta" class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass1" class="col-lg-4 control-label">Contraseña: * </label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="pass1" name="pass1"  placeholder="De 6 a 15 caracteres" required onfocus="verificarCorreo()" pattern="[\s\S]{6,15}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass2" class="col-lg-4 control-label">Repetir Contraseña: * </label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="pass2" name="pass2" placeholder="De 6 a 15 caracteres" required data-match="#pass1" data-error=" Las contraseñas no coinciden o no respetan la cantidad de caracteres solicitados." pattern="[\s\S]{6,15}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="col-lg-10">
                              <button type="button" class="btn btn-default" style=" margin-left: 100px;" onclick="window.location.href='panel.php'">Cancelar</button>
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



