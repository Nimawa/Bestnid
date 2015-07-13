    <!-- Formulario de busqueda  -->
	
    <div style=" padding: 0 200px;">
        <div class="container-fluid">
            <div class="row" style="border-bottom-style: ridge; border-bottom-width: 3px; ">
                <div class="col-xs-6 col-md-4">
                    <a style=" color: #000; font-style:italic; font-size: 20px; ">
                        <strong> BESTNID </strong>
                    </a>
                    <?php
                        if (isset($_SESSION['admin_id'])) {
                    ?>
                    <a href="../admin/panel.php"> <img src="../Img/logo.png" > </a>
                    <?php
                    }else {
                    ?>
                     <a href="../index.php"> <img src="../Img/logo.png" > </a>
                     <?php
                    }
                    ?>
                    
                </div>

                <div  class="col-xs-12 col-sm-6 col-md-8">
                    <form class="form-inline" role="form" action="filtrador.php" method="post">
                        <div class="form-group" >
                            <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">
                                <span class="glyphicon glyphicon-arrow-left"></span>
                            </button>
                            <label for="campoBusqueda">Busqueda:</label>
                            <input type="text" class="form-control" id="campoBusqueda" name="campoBusqueda" placeholder=" Ingrese su busqueda..." style="margin-bottom: 3px;">
                            
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-search"></span>
                            </button><br>
                            <input type="hidden" name="categoria" value="0">
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
            </div><br>
        </div>
    </div>
   
			
