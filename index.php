

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
    
       <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
  </head>

  <body> 
    
    <?php include 'src/head.php';?>
    <!-- Navigation -->    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-text">Plataforma de Subastas Online</p>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style="margin-right: 0px;">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <div>                    
                            <h6>
                                <a href="src/solicitudAltaDeUsuario.php" style="color: #c0c0c0;"> No estas registrado?</a>
                            </h6>
                            <h6>
                                <a href="#" style="color: #c0c0c0;"> Olvidaste tu contraseña?</a>
                            </h6>                            
                        </div>
                    </li>    
                    <li> 
                        <div class="col-xs-12">
                            <input type="mail" class="form-control input-sm" id="user" name="user" placeholder="E-mail" style=" margin-top: 10px;">
                        </div>        
                    </li>
                    <li>
                        <input type="text" class="form-control input-sm" id="pass" name="pass" placeholder="Contraseña" style=" margin-top: 10px;" >
                    </li>
                    <li>
                    <a href="#">Iniciar Sesion <span class="glyphicon glyphicon-log-in"></span></a>
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
        </div>
        <!-- /.container -->
    </nav>
    
        <!-- Formulario de busqueda  -->
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
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label for="campoBusqueda">Busqueda:</label>
                            <input type="text" class="form-control" id="campoBusqueda" name="campoBusqueda" placeholder=" Ingrese su busqueda..." style="margin-bottom: 5px;">
                            
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-search"></span>
                                
                            </button><br>
                            Filtros: 
                            <div class="checkbox">
                                <label>
                                    <select class="form-control input-sm">
                                        <option>Electronica</option>
                                        <option>Muebles</option>
                                        <option>Bazar</option>
                                        <option>Audio y video</option>
                                        <option>Autos</option>
                                    </select>

                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" value="">
                                  Titulo
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" value="">
                                  Descripcion
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
                        
                        <ul class="media-list">
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images1.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images2.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images3.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images4.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images5.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images6.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images7.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images8.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images9.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images10.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images11.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                          <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="fotosmuestra/images12.jpg" alt="..." style="max-height: 168px; max-width: 168px;">
                            </a>
                            <div class="media-body">
                              <h4 class="media-heading">Título del contenido</h4>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                          </li>
                        </ul>
                        
                    </div>
            </div>
        </div>
    </diV>
    
    
    
   





  </body>
</html>
