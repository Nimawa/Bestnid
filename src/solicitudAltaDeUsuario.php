

<!DOCTYPE html>
<html lang="en">

  <body> 
    
    <?php include 'head.php';?>
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
                        <strong>  Solicitud de Alta de Usuario </strong>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                </div>
                <div class="col-xs-6 col-md-8">
                    <form data-toggle="validator" class="form-horizontal" role="form" >
                        Aclaracion: Los campos con (*) son obligatorios <br><br>
                        <div class="form-group">
                            <label for="nombre" class="col-lg-2 control-label">Nombre: *</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="nombre" required placeholder="Nombre" data-error=" Ingrese un dato Valido!">
                              <div class="help-block with-errors"></div>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-lg-2 control-label">Apellido: *</label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="apellido" required placeholder="Apellido" data-error=" Ingrese un dato Valido!">
                              <div class="help-block with-errors"></div>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dni" class="col-lg-2 control-label">DNI: * </label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="dni" required placeholder="Ej. 12456879" data-error=" Ingrese un dato Valido!">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-lg-2 control-label">Telefono: * </label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="telefono" required placeholder="Ej. 221 - 154568789" data-error=" Ingrese un dato Valido!">
                              <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="calle" class="col-lg-2 control-label">Calle: * </label>
                            <div class="col-lg-3">
                              <input type="text" class="form-control" id="calle" required placeholder="Calle" data-error=" Ingrese un dato Valido!" >
                            </div>
                            
                            <label for="nro" class="col-lg-2 control-label">Nro: * </label>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="nro" required placeholder="Ej. 1234" data-error=" Ingrese un dato Valido!">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="piso" class="col-lg-2 control-label">Piso:  </label>
                            <div class="col-lg-2">
                                <input type="number" class="form-control" id="piso" required placeholder="Ej. A" data-error=" Ingrese un dato Valido!">
                            </div>
                            <label for="depto" class="col-lg-2 control-label">Depto.:  </label>
                            <div class="col-lg-2">
                              <input type="text" class="form-control" id="depto" required placeholder="Ej. 1" data-error=" Ingrese un dato Valido!">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ciudad" class="col-lg-2 control-label">Ciudad: * </label>
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="ciudad" required placeholder="Ciudad" data-error=" Ingrese un dato Valido!">
                              <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-lg-2 control-label">Pcia: * </label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="telefono" required placeholder="Provincia" data-error=" Ingrese un dato Valido!">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        Aclaracion: Su correo electronico sera su nombre de usuario<br><br>
                        <div class="form-group">
                            <label for="telefono" class="col-lg-4 control-label">Email: * </label>
                            <div class="col-lg-4">
                                <input type="email" class="form-control" id="telefono" required placeholder="ejemplo@mail.com" data-error=" Ingrese una direccion de correo electronico Valida!">
                                <div class="help-block with-errors"></div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass1" class="col-lg-4 control-label">Contraseña: * </label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="pass1" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass2" class="col-lg-4 control-label">Repetir Contraseña: * </label>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="pass2" placeholder="" required data-match="#pass1" data-error=" Las contraseñas no coinciden!">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-lg-10">
                              <button type="button" class="btn btn-default" style=" margin-left: 100px;">Cancelar</button>
                              <button type="submit" class="btn btn-danger" style=" margin-left: 20px;">Aceptar</button>
                            </div>
                        </div>
                       
                       
                    </form>    
                </div>
            </div>
            
        </div>
    </div>
        
        

    
    
  </body>
</html>

