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
            <?php 
            if(!isset($_SESSION['estado']) or $_SESSION['estado'] != true){
                include 'formDeslogueado.php'; 
            }else{
                include 'formLogueado.php'; 
            }              
        ?>
        </div>
        <!-- /.container -->
    </nav>
