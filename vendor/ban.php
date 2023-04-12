<?php

    $connect = mysqli_connect("localhost", "c92737bg_neon", "uDqw1UKc", "c92737bg_neon");
    
    date_default_timezone_set("Europe/Moscow");
    mysqli_query($connect,'SET NAMES utf8');
    $name = $_POST['name'];
    $studentNumber = $_POST['studNum'];
    $timeBan = $_POST['timeBan'];
    $btnBun = $_POST['btnBun'];
    $time = date("Y-m-d");

    if($btnBun == '1'){
        $query = "INSERT INTO `banned` (`id`, `Name`, `StudentNumber`, `Mail`, `Time`) VALUES('', '$name', '$studentNumber', '$timeBan', '$time')";
    } else if ($btnBun == '2'){
        $query = "DELETE FROM `banned` WHERE `studentNumber`= $studentNumber  LIMIT 1";
    }
    

    if ($result = mysqli_query($connect, $query)){
        header('Location: ../adminneonguu090909090909023121210.php');
    } 


?>