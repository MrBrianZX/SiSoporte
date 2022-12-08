<?php 
    include "__connection.php" ;
	$fecha = date("y-m-d");

    $sql ='UPDATE `equipo_propietario` SET `FECHA_DEVOLUCION`="'.$fecha.'" WHERE `idEQUIPOS` ='.$_POST["CodigoUABC"];
    if(mysqli_query($__CON, $sql)){
        header("Location: ../Equipos/index.php?entrega=1");
    }
    else{
        header("Location: ../Equipos/index.php?error=1");
    }
?>

