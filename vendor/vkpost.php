<?php

    $connect = mysqli_connect("localhost", "c92737bg_neon", "uDqw1UKc", "c92737bg_neon");
    
    date_default_timezone_set("Europe/Moscow");
    mysqli_query($connect,'SET NAMES utf8');
    $key1 = $_POST['key1'];
    $key2 = $_POST['key2'];
    $key3 = $_POST['key3'];

    $time = date('H:i'); 
    
    $query = "UPDATE `users` SET `Name`='$key1', `StudentNumber` = '$key2', `Mail` = '$key3' WHERE `id`='12' LIMIT 1";

    if ($result = mysqli_query($connect, $query)){
        header('Location: ../adminneonguu090909090909023121210.php');
    } 


?>