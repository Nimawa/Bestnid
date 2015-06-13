<form method="post"  action="logout.php">  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style="margin-right: 0px;">
        <ul class="nav navbar-nav pull-right">
            <li>
                <a style="color: #c0c0c0;" > BIENVENIDO</a>
            </li>    
            <li>                         
                  <a href="usuarioMiCuenta.php"> <?php echo $_SESSION['nombre']," ", $_SESSION['apellido']; ?></span></a>
            </li>
            <li>
            <input type="submit" class="btn btn-danger btn-sm" style=" margin-top: 10px; margin-right: 80px" value="Cerrar Sesion">
            </li>
            <li>
            <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px; margin-right: 80px" value="PUBLICAR" onclick="window.location.href='altaPublicacion.php'">
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

                        