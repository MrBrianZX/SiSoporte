<?php
    include_once "__connection.php" ;

    if(!empty($_GET)){
        $sql = "UPDATE `matenimientos` SET `ESTADO` = '0' WHERE `matenimientos`.`idMATENIMIENTOS` = " .$_GET['id'];
        if(mysqli_query($__CON, $sql)){
            header("Location: ../Mantenimientos/index.php?baja=1");
        }
        else{
            header("Location: ../Mantenimientos/index.php?error=1");
        }
    }
?>