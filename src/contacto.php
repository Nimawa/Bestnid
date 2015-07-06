<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
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
                <strong> Formulario de contacto </strong>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-4">
                    
          </div>
          <div class="col-xs-6 col-md-8">
            <form action="enviarContacto.php" method="post"  data-toggle="validator" class="form-horizontal"  id="alta" enctype="multipart/form-data" >
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
                  <label for="telefono" class="col-lg-2 control-label">Telefono: </label>
                  <div class="col-lg-4">
                    <input type="text" class="form-control" id="telefono" name="telefono"  placeholder="Ej. 221154568789" pattern="[0-9]{7,12}" data-error="Complete correctamente este campo" >
                    <div class="help-block with-errors"></div> 
                  </div>
              </div>
              <div class="form-group">
                  <label for="email" class="col-lg-2 control-label">Email: * </label>
                  <div class="col-lg-4">
                      <input  class="form-control" id="email" name="email" required placeholder="ejemplo@mail.com" pattern="[0-9a-zA-Z._.-]+\@[0-9a-zA-Z._.-]+\.[0-9a-zA-Z]+" data-error=" Ingrese una direccion de correo electronico Valida!" >
                      <div id="respuesta" class="help-block with-errors"></div> 
                  </div>
              </div>
              <div class="form-group">
                  <label for="comentario" class="col-lg-2 control-label">Comentarios: *</label>
                 	<div class="col-lg-8">
                		<textarea  type="text" class="form-control" rows= "4" id="comentario" name="comentario" required placeholder="Ingrese aqui sus comentarios" data-error=" Ingrese un dato Valido!"></textarea>
                 	<div class="help-block with-errors"></div>   
           	  	</div>
              </div>
              
              <div class="form-group" >
                <div class="col-lg-10">
                  <button type="button" class="btn btn-default" style=" margin-left: 100px;" onClick="window.location = 'index.php';" >Cancelar</button>
                  <input type="submit"  class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar">
                </div>
              </div>
                       
                       
            </form>    
            </div>
          </div>           
    </div>
  </div>
</body>
</html>