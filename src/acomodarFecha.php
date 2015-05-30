

    <?php
	//recibe como parametro la fecha con formato americano
    function acomodarFecha($v1){
    $fecha=date("d-m-Y",strtotime($v1));
    return $fecha;
	
	}
    ?>

