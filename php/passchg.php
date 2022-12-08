<?php
    include "__connection.php" ;

    if(!empty($_POST)){
        $sql = "UPDATE `soporte` SET `PASSWD`='".$_POST['NPASS']."' WHERE `CORREO` ='".$_POST['EMAIL']."' AND `PASSWD` = '".$_POST['PASS']."'";
        
        if(mysqli_query($__CON, $sql)){
            header("Location: ../main/passchange.php?success=1");
        }
        else{
            header("Location: ../main/passchange.php?error=1");
        }
    }
?>