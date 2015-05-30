<?php
// primer parametro es el id de la categoria 
 function filtrarPorCategoria($v1)
 {
      $reg =  "SELECT * FROM publicacion
		       WHERE id_categoria= $v1";
					   
     return $reg;
 }
 
 // primer parametro el titulo
 function filtrarPorTitulo($v1)
 {
    $reg = " SELECT *
	                   FROM publicacion
		               WHERE publicacion.titulo LIKE '%$v1%' "
					       ;
     return $reg;
 
 
 }
  // primer parametro el titulo 
 function filtrarPorDescripcion($v1)
 {
    $reg = " SELECT *
	                   FROM publicacion
		               WHERE publicacion.descripcion LIKE '%$v1%' "
					       ;
     return $reg;
 
 
 }
 
 ?>