<?php
    include_once "__connection.php" ;

    if(!empty($_POST)){
        //echo $_POST['CodigoUABC'];
        $sql = "UPDATE `equipos` SET `ESTADO` = '000' WHERE `equipos`.`idEQUIPOS` = " .$_POST['CodigoUABC'];
        //echo $sql;
       if(mysqli_query($__CON, $sql)){
            header("Location: ../Equipos/index.php?baja=1");
        }
        else{
            header("Location: ../Equipos/index.php?error=1");
        }
    }
?>