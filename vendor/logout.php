<?php

    $connect = mysqli_connect("localhost", "c92737bg_neon", "uDqw1UKc", "c92737bg_neon");
    
    date_default_timezone_set("Europe/Moscow");
    mysqli_query($connect,'SET NAMES utf8');
    $pcNum = $_POST['buttonLeave'];
    $time = date('H:i'); 
    
    $query = "UPDATE `users` SET `Name`='Свободен', `Time` = '$time', `StudentNumber` = '' WHERE `PcNumber`='$pcNum' LIMIT 1";

    if ($result = mysqli_query($connect, $query)){
        header('Location: ../index.php');
    } 


?>