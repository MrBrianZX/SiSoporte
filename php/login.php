<?php
    include "__connection.php" ;

    if(!empty($_POST)){
        $sql = "SELECT * FROM soporte WHERE correo LIKE '".$_POST['user']."' AND passwd = '".$_POST['pass']."'";
        $query = mysqli_query($__CON, $sql);

        $row = mysqli_fetch_array($query);

        if(mysqli_num_rows($query) > 0){
            session_start();
            $_SESSION['NAME'] = $row['NOMBRE'];
            $_SESSION['USER'] = $row['CORREO'];
            $_SESSION['LVL'] = $row['S_LVL'];
            header("Location: ../main/index.php");
        }
        else{
            header("Location: ../main/login.php?error=1");
        }
    }
?>