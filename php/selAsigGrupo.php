<?php
   include("conexion.php");
	
	$consulta="SELECT * from usuario";
	$link=connect();
    $respuesta = mysqli_query($link, $consu|lta) or die("Error al ejecutar la consulta");
    mysqli_close($link);

    $rows = array();
    while ($r = mysqli_fetch_assoc($respuesta)) {
        $rows[] = $r;
    }
    echo json_encode($rows);

	?>