

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
                        <strong>  Realizar Oferta </strong>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                </div>
                <div class="col-xs-6 col-md-8">
                    <?php
                        $idpublicacion=3;
                        require 'conexion.php';
                        require 'imprimirPublicacion.php';
                        $aux= conectar();
                        $reg=mysql_query(" Select * from publicacion where id=$idpublicacion ",$aux)or die("problema de select".mysql_error());
                        imprimirPublicacion($reg,$aux);
                        mysql_close($aux);
                    ?>


                    <form action="altaOferta.php" method="post" data-toggle="validator" class="form-horizontal"  id="formularioAltaUsuario" >
                        Aclaracion: Los campos con (*) son obligatorios <br><br>
                        <div class="form-group">
                            <label for="monto" class="col-lg-2 control-label">Monto: * $</label>
                            <div class="col-lg-2">
                              <input  class="form-control" id="monto" name="monto" required placeholder="$" pattern="[0-9]+" data-error="Complete correctamente este campo" >
                              <div class="help-block with-errors"></div>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="motivos" class="col-lg-2 control-label">Motivos: *</label>
                            <div class="col-lg-8">
                              <textarea type="text" class="form-control" rows= "4" id="motivos" name="motivos" required placeholder="Indique los  motivos por los cuales tendria que ganar la subasta."  data-error="Complete correctamente este campo" ></textarea>
                              <div class="help-block with-errors"></div>   
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="col-lg-10">
                              <button type="button" class="btn btn-default" style=" margin-left: 100px;" onclick="window.history.back()">Cancelar</button>
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



