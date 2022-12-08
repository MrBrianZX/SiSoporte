<?php 
    include_once "__connection.php" ;

    $sql ="INSERT INTO `equipos` (`CODIGO_UABC`, `NUMERO_SERIE`, `TIPO`, `MARCA`, `MODELO`, `ESTADO`, `DETALLES`, `NOTAS`) VALUES ('"
        .$_POST['CodigoUABC']."','"
        .$_POST['NoSerie']."','"
        .$_POST['Tipo']."','"
        .$_POST['Marca']."','"
        .$_POST['Modelo']."','"
        ."1','"
        .$_POST['DETALLES']."','"
        .$_POST['NOTAS']."')";

        if(mysqli_query($__CON, $sql)){
            header("Location: ../Equipos/index.php?registro=1");
        }
        else{
            header("Location: ../Equipos/index.php?error=1");
        }
?>