<!DOCTYPE html>
<html>
<?php include 'head.php';require 'validarSesion.php';?>
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
                <strong> Modificar oferta </strong>
            </h3>
          </div>
        </div>
         <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                </div>
                <div class="col-xs-6 col-md-8">
        <?php
      
        require 'conexion.php';
        $conexion=conectar();
        $id_oferta=$_REQUEST['id'];
        $id_publicacion=$_REQUEST['idpubli'];
      

        $registros=mysql_query("SELECT id, monto, descripcion FROM oferta WHERE id='$id_oferta' AND id_publicacion='$id_publicacion' ", $conexion) 
         or die("Problemas en el select:".mysql_error($conexion));
        $reg=mysql_fetch_array($registros);
        ?>

         <form action="modificacionEfectivaOferta.php" method="post" data-toggle="validator" class="form-horizontal"  id="formularioAltaOferta" >
                        Aclaracion: Los campos con (*) son obligatorios <br><br>
                        <div class="form-group">
                            <label for="monto" class="col-lg-2 control-label">Monto: * $</label>
                            <div class="col-lg-2">
                              <input  class="form-control" id="monto" name="monto" required value="<?php echo $reg['monto']?>" pattern="(?:\d*\.)?\d+" data-error="Complete correctamente este campo" >
                              <div class="help-block with-errors"></div>   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="motivos" class="col-lg-2 control-label">Motivos: <?php echo $reg["descripcion"]?></label>
                        </div>
                        <div class="form-group" >
                            <div class="col-lg-10">
                              <button type="button" class="btn btn-default" style=" margin-left: 100px;" onclick="window.history.back()">Cancelar</button>
                              <input type="submit" class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar">
                            </div>
                        </div>
                        <input type="hidden" name="idoferta" id="idoferta" value="<?php echo $reg['id']?>">    

          </form>   

                </div>
           </div>
           </div>
           </div>
  </body>
</html>
    