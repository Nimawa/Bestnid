    <!-- Formulario de busqueda  -->
	
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
                    <form class="form-inline" role="form" action="filtrador.php" method="post">
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
                                        require 'conexion.php';
                                        require 'sql/getCategoria.php';
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
			
