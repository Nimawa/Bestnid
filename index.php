
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BESTNID - Subastas Online</title>
 
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/funciones.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/validator.min.js"></script>
    
       <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style> 
  </head>

  <body> 
    
    <!-- Navigation -->    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-text">Plataforma de Subastas Online</p>
                
            </div>

              <!-- Si el usuario esta logueado muestra su nombre y cerrar sesion, sino, muestra el form de login -->
            <?php 
              session_start();
              if(!isset($_SESSION['estado']) || $_SESSION['estado'] != true){
                  ?>
                  <form method="post"  action="src/login.php">  
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style="margin-right: 0px;">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <div class="col-xs-12">                    
                                    <h6>
                                        <a href="src/solicitudAltaDeUsuario.php" style="color: #c0c0c0;"> No estas registrado?</a>
                                    </h6>
                                    <h6>
                                        <a href="#" style="color: #c0c0c0;" > Olvidaste tu contraseña?</a>
                                    </h6>                            
                                </div>
                            </li>    
                            <li>                         
                                  <input type="mail" class="form-control input-sm" id="user" name="user" required placeholder="E-mail" style=" margin-top: 10px;">
                            </li>
                            <li>
                                <div class="col-xs-12">
                                  <input type="password" class="form-control input-sm" id="pass" name="pass" required placeholder="Contraseña" style=" margin-top: 10px;"  >
                                </div> 
                            </li>
                            <li>
                            <input type="submit" class="btn btn-danger btn-sm" style=" margin-top: 10px;" value="Iniciar Sesion">
                            </li>
                            <li>
                                <a href="#"> Ayuda <span class="glyphicon glyphicon-user"></span></a>
                            </li>
                            <li>
                                <a href="#"> Contacto <span class="glyphicon glyphicon-envelope"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                  </form>
                  <?php

              }else{
                  ?>
                  <form method="post"  action="logout.php">  
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style="margin-right: 0px;">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <a style="color: #c0c0c0;" > BIENVENIDO</a>
                            </li>    
                            <li>                         
                                  <a href="#"> <?php echo $_SESSION['nombre']," ", $_SESSION['apellido']; ?></span></a>
                            </li>
                            <li>
                            <input type="submit" class="btn btn-danger btn-sm" style=" margin-top: 10px; margin-right: 80px" value="Cerrar Sesion">
                            </li>
                            <li>
                            <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px; margin-right: 80px" value="PUBLICAR" onclick="window.location.href='src/altaPublicacion.php'">
                            </li>
                            <li>
                                <a href="#"> Ayuda <span class="glyphicon glyphicon-user"></span></a>
                            </li>
                            <li>
                                <a href="#"> Contacto <span class="glyphicon glyphicon-envelope"></span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- /.navbar-collapse -->
                </form>
                <?php
              }              
            ?> 


        </div>
        <!-- /.container -->
    </nav>
    
        <!-- Formulario de busqueda  -->
    
  <?php
     //include 'src/busqueda.php';
  ?>  


    <div style=" padding: 0 200px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a style=" color: #000; font-style:italic; font-size: 20px; ">
                        <strong> BESTNID </strong>
                    </a>
                    <a href="#"> <img src="Img/logo.png" > </a>
                </div>

                <div  class="col-xs-12 col-sm-6 col-md-8">
                    <form class="form-inline" role="form" action="src/filtrador.php" method="post">
                        <div class="form-group">
                            <label for="campoBusqueda">Busqueda:</label>
                            <input type="text" class="form-control" id="campoBusqueda" name="campoBusqueda" placeholder=" Ingrese su busqueda..." style="margin-bottom: 3px;">
                            
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-search"></span>
                            </button><br>
                            Filtros: 
                            <div class="checkbox">
                                <label>
                                    <select class="form-control input-sm" name="idCategoria">
                                      <?php
                                        require 'src/conexion.php';
                                        require 'src/sql/getCategoria.php';
                                        $conexion= conectar();
                                        getCategoria($conexion);
                                      ?>
                                    </select>

                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                   <input type="radio" name="radio1" value="titulo" > 
                                  Titulo
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                   <input type="radio" name="radio1" value="descripcion" > 
                                  Descripcion
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                   <input type="radio" name="radio1" value="ambas" checked="true" > 
                                  Titulo/Descricion
                                </label>
                            </div>
                            
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>

    <div style=" padding: 0 200px;">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    
                    <div class="list-group">
                        <a href="#" class="list-group-item "></span><strong>CATEGORIAS</strong></a>
                        <a href="#" class="list-group-item"><span class="badge">5</span>Cras justo odio</a>
                        <a href="#" class="list-group-item"><span class="badge">35</span>Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item"><span class="badge">25</span>Morbi leo risus</a>
                        <a href="#" class="list-group-item"><span class="badge">14</span>Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item"><span class="badge">19</span>Vestibulum at eros</a>
                        <a href="#" class="list-group-item"><span class="badge">15</span>Cras justo odio</a>
                        <a href="#" class="list-group-item"><span class="badge">14</span>Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item"><span class="badge">56</span>Morbi leo risus</a>
                        <a href="#" class="list-group-item"><span class="badge">14</span>Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item"><span class="badge">3</span>Vestibulum at eros</a>
                    </div>
                    
                </div>

                    <div  class="col-xs-12 col-sm-6 col-md-8">
                        <?php
                          $reg=mysql_query(" Select * from publicacion ",$conexion)or die("problema de select".mysql_error());
                          require 'src/imprimirPublicacion.php';
                          imprimirPublicacion($reg,$conexion);
                          mysql_close($conexion);
                        ?>
           
                        
                    </div>
            </div>
        </div>
    </diV>


    <!-- Si retorna Codigo=1, se regresa del alta de usuario, por lo tanto informa de ello-->
    <?php
        if (isset($_REQUEST['u'])){
          if ($_REQUEST['u']==1) {
            ?>  
            <script language="javascript">
            bootbox.alert("Su cuenta de usuario ha sido creada exitosamente, Inicie Sesion con su E-mail y contraseña.",null);
            </script>
          <?php 
          }else if ($_REQUEST['u']==2) {
            ?> <!-- Si retorna Codigo=2, el mail esta utilizado por otro usuario--> 
            <script language="javascript">
            bootbox.alert("El email ingresado se encuentra registrado! Ingrese nuevamente sus datos",null);
            </script>
          <?php
          }

          if ($_REQUEST['u']==3) {
            ?>  
            <script language="javascript">
            bootbox.alert("La contraseña ingresada es incorrecta.",null);
            </script>
          <?php 
          }
        }
    ?>
    
    
   





  </body>
</html>

