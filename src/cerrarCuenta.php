<!DOCTYPE html>
<html lang="en">
  <body> 
        <?php include 'head.php';?>
        <?php include 'navegacion.php';?>
        <?php include 'busqueda.php';?>  
        

    <div style=" padding: 0 200px;">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-md-12">
                    <H1>Esta seguro que quiere cerrar su cuenta? Si lo hace no pertenecera más a Bestnid!!!</h1>
                </div>
                 <button type="button" class="btn btn-default" style=" margin-left: 100px;" onclick="window.location.href='usuarioMiCuenta.php'">Cancelar</button>
                 <input type="button" onclick="window.location.href='cerrarCuentaEfectiva.php'" class="btn btn-danger" style=" margin-left: 20px;" value="Aceptar">

                <div  class="col-xs-12 col-sm-6 col-md-8">
                    <div  id="resultado" ></div>    
                  
                </div>
            </div>
        </div>
    </diV>