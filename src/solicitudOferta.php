

<!DOCTYPE html>
<html lang="en">
    <?php 
    include 'head.php';
    require 'validarSesion.php';?>
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
                        <strong>  Realizar Oferta </strong>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                </div>
                <div class="col-xs-6 col-md-8">
                    <?php
                        $idpublicacion=$_REQUEST['idPublicacion'];
                        require 'conexion.php';
                        require 'imprimirPublicacion.php';
                        $aux= conectar();
                        $reg=mysql_query(" Select * from publicacion where id=$idpublicacion ",$aux)or die("problema de select".mysql_error());
                        $r=mysql_fetch_array($reg);
  

                    ?>

                    <ul class="media-list" >
                        <li class="media" >
                          <a class="pull-left" href="#" >
                              <div class="thumbnail" style=" border: 3px #333; float: left; height: 10em; margin: .2em 1em 1em 0; overflow: hidden;  width: 10em;" >
                                <img class="media-object"  ><?php getFoto($r['id'], $aux); ?> </img>
                              </div>
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading"  ><?php echo $r['titulo'];?> </h4>
                            <?php echo $r['descripcion']. "<br>"; ?>
                            <?php echo 'Fecha de inicio: '.acomodarFecha($r['fecha_inicio']). "<br>"; ?> 
                            <?php echo 'Fecha de fin: '.acomodarFecha($r['fecha_fin'])."<br>"; ?> 
                                Categoria: <?php $a= $r['id_categoria'];
                                $reg=mysql_query(" Select nombre from categoria where id= $a ",$aux)or die("problema de select".mysql_error());
                                   if($x=mysql_fetch_array($reg)){
                                        echo $x['nombre'];  
                               }
                            ?> 
                          </div>
                            <?php
                              $id_publicacion=$r['id'];             //controla si hay ofertas, habilita y desabilita el boton
                              $reg=mysql_query(" Select * from oferta where id_publicacion='$id_publicacion'  ",$aux)
                              or die("problema de select".mysql_error());
                              $comp=mysql_fetch_array($reg);
                              ?>
                        </li><hr>
                    </ul>


                    <form action="altaOferta.php" method="post" data-toggle="validator" class="form-horizontal"  id="formularioAltaOferta" >
                        Aclaracion: Los campos con (*) son obligatorios <br><br>
                        <div class="form-group">
                            <label for="monto" class="col-lg-2 control-label">Monto: * $</label>
                            <div class="col-lg-2">
                              <input  class="form-control" id="monto" name="monto" required placeholder="$ 50.50" pattern="(?:\d*\.)?\d+" data-error="Complete correctamente este campo" >
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
                        <input type="hidden" id="idPublicacion" name="idPublicacion" value=" <?php echo $idpublicacion; ?> "><br>
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



