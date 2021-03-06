<!-- header y scripts -->  
<?php 
    session_start(); 
    require 'acomodarFecha.php';
    require 'sql/getFoto.php';



?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BESTNID - Subastas Online</title>
 
    <!-- CSS de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../css/datepicker.css">
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/funciones.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootbox.min.js"></script>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/validator.js"></script>
    <script src="../js/validator.min.js"></script>
    <script src="../js/fotos.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../Keypress/keypress-2.1.0.min.js"></script>
    <script src="../Keypress/keypress.js"></script>

       <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style> 
</head>
    <script type="text/javascript">
    var listener = new window.keypress.Listener();
    listener.simple_combo("ctrl b", function() {
        console.log("You pressed shift and s");
        document.getElementById('campoBusqueda').focus();
    });
    </script>