<?php 
    include_once "__connection.php" ;
	$fecha = date("y-m-d");
    $sql ="INSERT INTO `matenimientos` (`ESTADO`, `DETALLES`, `ID_SOPORTE`, `FECHA`, `idEQUIPOS`)  VALUES ('1','"
        .$_POST['Detalles']."','"
        .$_POST['Matricula']."','"
        .$fecha."','"
        .$_POST['CodigoUABC']."')";
        if(mysqli_query($__CON, $sql)){
            header("Location: ../Mantenimientos/index.php?registro=1");
        }
        else{
            header("Location: ../Mantenimientos/index.php?error=1");
        }
?>