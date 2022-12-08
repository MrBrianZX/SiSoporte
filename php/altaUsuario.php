<?php
    include_once "__connection.php" ;
	$fecha = date("y-m-d");
	$level = "1";
        $sql = "INSERT INTO `soporte` (`MATRICULA`, `NOMBRE`, `TELEFONO`, `CORREO`, `PASSWD`, `FECHA_REGISTRO`, `FOTO`, `S_LVL`) VALUES 
		('".$_POST['MATRICULA']
            ."','".$_POST['NOMBRE']
            ."','".$_POST['TELEFONO']
            ."','".$_POST['CORREO']
            ."','".$_POST['PASSWORD']
            ."','".$fecha
            ."','".$_POST['FOTO']
            ."','".$level
            ."')";
        if(mysqli_query($__CON, $sql)){
            header("Location: ../Soporte/index.php?registro=1");
        }
        else{
            header("Location: ../Soporte/index.php?error=1");
        }
?>