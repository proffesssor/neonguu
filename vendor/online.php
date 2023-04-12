<?php

    $connect = mysqli_connect("localhost", "c92737bg_neon", "uDqw1UKc", "c92737bg_neon");
    
    date_default_timezone_set("Europe/Moscow");
    mysqli_query($connect,'SET NAMES utf8');
    $pcNum = $_POST['buttonOnline'];
    $time = date('H:i'); 
    
    $query = "UPDATE `users` SET `Name`='Открыто', `Time` = '$time' WHERE `id`='11' LIMIT 1";

    if ($result = mysqli_query($connect, $query)){
        header('Location: ../adminneonguu090909090909023121210.php');
    } 


?>