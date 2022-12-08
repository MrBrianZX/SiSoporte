<?php
    include_once "__connection.php" ;

    if(!empty($_POST)){
        //echo $_POST['CodigoUABC'];
        $sql = "UPDATE `propietarios` SET `ESTADO` = '0' WHERE `propietarios`.`NO_EMPLEADO` = " .$_POST['NO_EMPLEADO'];
        if(mysqli_query($__CON, $sql)){
            header("Location: ../Propietarios/index.php?baja=1");
        }
        else{
            header("Location: ../Propietarios/index.php?error=1");
        }
    }
?>