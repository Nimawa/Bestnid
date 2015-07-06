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
            <form method="post"  action="logout.php">  
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style="margin-right: 0px;">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a style="color: #c0c0c0;" > BIENVENIDO</a>
                        </li>    
                        <li>                         
                              <a > <?php echo $_SESSION['admin_nombre']," ", $_SESSION['admin_apellido']; ?></span></a>
                        </li>
                        <li>
                        <input type="submit" class="btn btn-danger btn-sm" style=" margin-top: 10px; margin-right: 80px" value="Cerrar Sesion">
                        </li>
                        <li>
                            <a href="correo.php" target="blank"> Correo <span class="glyphicon glyphicon-envelope" ></span></a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </form>
            
        </div>
        <!-- /.container -->
    </nav>