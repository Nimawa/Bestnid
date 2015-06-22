
<!DOCTYPE html>
<html lang="en">
  <body> 
        <?php include 'head.php';?>
        <?php include 'navegacion.php';?>
        <?php include 'busqueda.php';?>  
        <?php require 'conexion.php';?>
        <?php require 'comprobarOferta.php';?>
        <?php
        $fec_act=date("Y-m-d");           
        $conexion= conectar();
        $idPublicacion=$_REQUEST['idPublicacion']; 
        $pub=mysql_query(" Select * from publicacion where id=$idPublicacion  ",$conexion)or die("problema de select".mysql_error());
        $publicacion=mysql_fetch_array($pub);
        $fot=mysql_query(" Select * from foto where id_publicacion=$idPublicacion  ",$conexion)or die("problema de select".mysql_error());
        $fot2=mysql_query(" Select * from foto where id_publicacion=$idPublicacion  ",$conexion)or die("problema de select".mysql_error());
        ?>
    <div style=" padding: 0 200px;">
        
        <div class="container-fluid">
            <?php
            
            if($publicacion['fecha_fin']<$fec_act){?>
              <div class="row">
                  <div class="col-xs-12 col-md-12" style="margin-top: 20px; background-color: #EEEEEE">
                    <h4 class="col-xs-5 col-md-5"></h4>
                    <h4 class="col-xs-4 col-md-4" style="color:red; align:center ">Publicacion Finalizada</h4>
                    <h4 class="col-xs-3 col-md-3"></h4>
                  </div>
              </div> <br><?php
            }  
            ?>    
            <div class="row">
                <div class="col-xs-6 col-md-6">

                                  <div id="contenedor">
                                    <div id="myCarousel" class="carousel slide" style="width: 550px; height: 300px; margin: auto auto">
                            
                                      <ol class="carousel-indicators">
                                        <?php
                                        $i=0;
                                        while($fotos=mysql_fetch_array($fot)){
                                          
                                            if($i>0){
                                                ?><li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li><?php
                                            }else{
                                                ?><li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="active"></li><?php
                                            }
                                          $i=$i+1;
                                        } 
                                        ?>
                                      </ol>
                                      <!-- Carousel items -->
                                      <div class="carousel-inner">
                                      <?php
                                        $i=0;
                                        while($fotos2=mysql_fetch_array($fot2)){
                                          
                                            if($i>0){
                                                ?><div class="item" style="width: 550px; height: 300px; margin: auto auto"> <?php echo '<img style="width: 100%; max-width: 100%;  height: 330px; margin: auto auto" src="data:image/jpeg;base64,'.base64_encode( $fotos2['foto'] ).'"/>' ?></div><?php
                                            }else{
                                                ?><div class="active item" style="width: 550px; height: 300px; margin: auto auto"> <?php echo '<img style="width: 100%; max-width: 100%; height: 330px; margin: auto auto" src="data:image/jpeg;base64,'.base64_encode( $fotos2['foto'] ).'"/>' ?></div><?php
                                            }
                                          $i=$i+1;
                                        } 
                                      ?>

                                      </div>
                                      <!-- Carousel nav -->
                                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                  </div>

                </div>

                <div  class="col-xs-6 col-md-6">
                  <div class="jumbotron" style="width: 550px; height: 300px; margin: auto auto">
                    <div class="container">
                      <h2><?php echo $publicacion['titulo'];?></h2>
                      <h4>
                        
                        <?php echo 'Fecha de inicio: '.acomodarFecha($publicacion['fecha_inicio']). "<br>"; ?> 
                        <?php echo 'Fecha de fin: '.acomodarFecha($publicacion['fecha_fin'])."<br>"; ?> 
                        Categoria: <?php $a= $publicacion['id_categoria'];
                        $reg=mysql_query(" Select nombre from categoria where id= $a ",$conexion)or die("problema de select".mysql_error());
                           if($x=mysql_fetch_array($reg)){
                              echo $x['nombre'];  
                           }
                        ?> 

                      </h4>
                      
                      <?php  
                        
           
                      if($publicacion['fecha_fin']>$fec_act){

                                              $id_publicacion=$publicacion['id'];   
                                            
                                           
                                              $reg=mysql_query(" Select * from oferta where id_publicacion='$id_publicacion' ",$conexion)
                                            or die("problema de select".mysql_error());
                                           
                                                    //controla si hay ofertas, habilita y desabilita el boton


                                           $comp=mysql_fetch_array($reg);
                                           if ($comp==0) {  //tuve que hacer esto si no me tiraba error en js
                                              $comp=0;
                                            }else{
                                              $comp=1;
                                            }
                                            if(( $publicacion ['baja'] == 'true' ) ){ 
                                              ?>
                                              <div>
                                                <strong><font color="red">Publicación finalizada</font></strong>
                                              </div>
                                              <?php
                                            }else if(isset($_SESSION['id']) && ($_SESSION['id']==$publicacion['id_usuario'])){
                                              ?>
                                              <a class="pull-right" >
                                                <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="MODIFICAR" onClick="modificarPublicacion(<?php echo $comp; ?>, <?php echo $publicacion['id'];?>);"> 
                                                <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="BORRAR" onClick="borrarPublicacion(<?php echo $publicacion['id'];?>)">
                                              </a>
                                              <?php
                                            }else if (isset($_SESSION['id']) && comprobarOferta($_SESSION['id'], $id_publicacion, $conexion) ){
                                              ?>
                                             <div>
                                                <strong><font color="red">Usted ya ofertó en esta publicación</font></strong>
                                              </div>
                                               <form method="post"  action="altaPregunta.php?idPublicacion=<?php echo "$idPublicacion";?>" data-toggle="validator">
                                                    <input  type="submit" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="PREGUNTAR" onClick="window.location.href='#'">  
                                                    <div class="col-lg-8">
                                                      <textarea type="text" class="form-control"  rows= "2" id="pregunta" name="pregunta" required placeholder="Realize una pregunta al subastador"  data-error="Complete correctamente este campo" ></textarea>
                                                      <div class="help-block with-errors"></div>   
                                                    </div>
                                                  </form>  
                                                <?php }else{?>
                                                <a class="pull-right" >
                                                  <input  type="button" class="btn btn-danger btn-sm" style=" margin-top: 10px;" value="OFERTAR" onClick="window.location.href='solicitudOferta.php?idPublicacion=<?php echo $publicacion['id'];?>'">
                                                </a>
                                                <a class="pull-left" >
                      						  
                                                  <form method="post"  action="altaPregunta.php?idPublicacion=<?php echo "$idPublicacion";?>" data-toggle="validator">
                                                    <input  type="submit" class="btn btn-primary btn-sm" style=" margin-top: 10px;" value="PREGUNTAR" onClick="window.location.href='#'">  
                                                    <div class="col-lg-8">
                                                      <textarea type="text" class="form-control"  rows= "2" id="pregunta" name="pregunta" required placeholder="Realize una pregunta al subastador"  data-error="Complete correctamente este campo" ></textarea>
                                                      <div class="help-block with-errors"></div>   
                                                    </div>
                                                  </form>  
                                                </a><?php
                                            }
                     }



                      ?>

                    </div>
                  </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12" style="margin-top: 20px;">
                  <h4>Descripcion:</h4>
                  <?php
				       echo $publicacion['descripcion'];
				       ?> 
                </div>
            </div> 
         <?php
		 
		     /// el listado de consultas////
	$idPublicacion= $_REQUEST['idPublicacion'];
    $listado=mysql_query(" SELECT *
	                          from consulta
							  where id_publicacion=$idPublicacion
	                          ",$conexion) or die("Problemas en el select:".mysql_error());

?>


              <div class="row">
                <div class="col-xs-12 col-md-12" style="margin-top: 20px; background-color: #EEEEEE">
                 
                      <h4>Preguntas realizadas </h4>
                       <?php 
					     while ($listaDeConsultas=mysql_fetch_array($listado))
						 { 
					   ?>
                      <h5>Pregunta:</h5><p>
					    <?php 
						    echo $listaDeConsultas['pregunta']; 
						    ?> </p>
                      <h5>Respuesta:</h5><p>
					   <?php if($listaDeConsultas['respuesta']<> null) 
					         echo $listaDeConsultas['respuesta'];
							 else
							   echo '';
							    
						    ?></p>
                              <hr>
                     <?php  }?>
                </div>
            </div>
                     
        </div>
    </diV>


  </body>
</html>





                     