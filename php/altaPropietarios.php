<?php
    include_once "__connection.php" ;
	$fecha = date("y-m-d");
	$level = "1";
    if(!empty($_POST)){
		if(!isset($_POST['FOTO'])){
			$_POST['FOTO']="";
		}
        $sql = "INSERT INTO `propietarios` (`NO_EMPLEADO`, `NOMBRE`, `TELEFONO`, `CORREO`, `FECHA_REGISTRO`, `ESTADO`) VALUES
		('".$_POST['NO_EMPLEADO']
            ."','".$_POST['NOMBRE']
            ."','".$_POST['TELEFONO']
            ."','".$_POST['CORREO']
            ."','".$fecha
            ."','".$level
            ."')";
        if(mysqli_query($__CON, $sql)){
            header("Location: ../Propietarios/index.php?registro=1");
        }
        else{
            header("Location: ../Propietarios/index.php?error=1");
        }
    }
?>