<form method="post"  action="login.php">  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"style="margin-right: 0px;">
        <ul class="nav navbar-nav pull-right">
            <li>
                <div class="col-xs-12">                    
                    <h6>
                        <a href="solicitudAltaDeUsuario.php" style="color: #c0c0c0;"> No estas registrado?</a>
                    </h6>
                    <h6>
                        <a href="olvidoContrasena.php" style="color: #c0c0c0;" > Olvidaste tu contraseña?</a>
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
                <a href="ayuda.php"> Ayuda <span class="glyphicon glyphicon-user"></span></a>
            </li>
            <li>
                <a href="contacto.php"> Contacto <span class="glyphicon glyphicon-envelope"></span></a>
            </li>
            <li>
                <a href="correocont.php" target="blank"> Correo <span class="glyphicon glyphicon-envelope" ></span></a>
            </li>
            
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</form>  