<?php 
    include "__connection.php" ;
	$fecha = date("y-m-d");

    $sql ="INSERT INTO `equipo_propietario` (`idEQUIPOS`, `idPROPIETARIOS`, `FECHA_ENTREGA`) VALUES ('"
        .$_POST['CodigoUABC']."','"
        .$_POST['NO_EMPLEADO']."','"
        .$fecha."')";
        if(mysqli_query($__CON, $sql)){
            header("Location: ../Equipos/index.php?entrega=1");
        }
        else{
            header("Location: ../Equipos/index.php?error=1");
        }
?>

