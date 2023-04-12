<?php

    $connect = mysqli_connect("localhost", "c92737bg_neon", "uDqw1UKc", "c92737bg_neon");
    
    date_default_timezone_set("Europe/Moscow");
    mysqli_query($connect,'SET NAMES utf8');
    $name = $_POST['name'];
    $studentNumber = $_POST['studNum'];
    $btnBun = $_POST['btnFav'];
    $time = date("Y-m-d");

    if($btnBun == '1'){
        $query = "INSERT INTO `favourites` (`id`, `Name`, `StudentNumber`, `Time`) VALUES('', '$name', '$studentNumber', '$time')";
    } else if ($btnBun == '2'){
        $query = "DELETE FROM `favourites` WHERE `studentNumber`= $studentNumber  LIMIT 1";
    }
    

    if ($result = mysqli_query($connect, $query)){
        header('Location: ../adminneonguu090909090909023121210.php');
    } 


?>