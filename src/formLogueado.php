<form method="post"  action="logout.php">  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style="margin-right: 0px;">
        <ul class="nav navbar-nav pull-right">
            <li>
                <a style="color: #c0c0c0;" > BIENVENIDO</a>
            </li>    
            <li>                         
                  <a href="usuarioMiCuenta.php"> <?php echo $_SESSION['nombre']," ", $_SESSION['apellido']; ?> </a>
            </li>
            <li>
            <input type="submit" class="btn btn-danger btn-sm" style=" margin-top: 10px; margin-right: 80px" value="Cerrar Sesion"> 
            </li>
            <li>
            <input  type="button" class="btn btn-primary btn-sm" style=" margin-top: 10px; margin-right: 80px" value="PUBLICAR" onclick="window.location.href='altaPublicacion.php'">
            </li>
            <li>
                <a href="ayuda.php"> Ayuda <span class="glyphicon glyphicon-user"></span></a>
            </li>
            <li>
                <a href="contacto.php"> Contacto <span class="glyphicon glyphicon-envelope"></span></a>
            </li>
            <li>
                <a href="correo.php" target="blank"> Correo <span class="glyphicon glyphicon-envelope" ></span></a>
            </li>

            
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</form>
<script type="text/javascript">
    var listener = new window.keypress.Listener();
    listener.simple_combo("ctrl c", function() {
        console.log("You pressed shift and s");
        window.location='logout.php';
    });
</script>

                        