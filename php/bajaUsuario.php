<?php
    include_once "__connection.php" ;

    if(!empty($_POST)){
        //echo $_POST['CodigoUABC'];
        $sql = "UPDATE `soporte` SET `S_LVL` = '0' WHERE `soporte`.`MATRICULA` = " .$_POST['MATRICULA'];
        if(mysqli_query($__CON, $sql)){
            header("Location: ../Soporte/index.php?baja=1");
        }
        else{
            header("Location: ../Soporte/index.php?error=1");
        }
    }
?>