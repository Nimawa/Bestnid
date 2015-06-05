<!DOCTYPE html>
<html lang="en">

  <body>
    
    <?php include 'head.php';?>
    <?php include 'navegacion.php';?>
	<?php include 'busqueda.php';?>
	<div style=" padding: 0 200px;">
	        <div class="container-fluid">
	        	<div class="row">
					<div class="col-xs-6 col-md-4">
	                    <?php include 'listadoCategorias.php';?>
	                </div>
			
					<div  class="col-xs-12 col-sm-6 col-md-8">


						<?php
							$categorial=$_REQUEST['categorial'];
							require 'imprimirPublicacion.php';
							$aux= conectar();
							$reg=mysql_query("select * from publicacion a where id_categoria=$categorial",$aux)or die("problema de select".mysql_error());
							$_SESSION['$a']="select * from publicacion a where id_categoria=$categorial";
							include 'ordenarPublicaciones.php';       
							imprimirPublicacion($reg,$aux);

						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

