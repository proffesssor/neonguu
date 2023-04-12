<?php
    $connect = mysqli_connect("localhost", "c92737bg_neon", "uDqw1UKc", "c92737bg_neon");
    
    mysqli_query($connect,'SET NAMES utf8');
    date_default_timezone_set("Europe/Moscow");
    setlocale(LC_ALL, 'ru_RU.utf8');
    mb_internal_encoding('UTF-8');
    mb_regex_encoding('UTF-8');
    mb_http_output('UTF-8');
    mb_language('uni');
    header('Content-type: text/html; charset=utf-8');
    
    $name = $_POST['name'];
    $studentNumber = $_POST['studentNumber'];
    $mail = $_POST['mail'];
    $pcNumber = $_POST['pcNumber'];
    $fulltime = date("Y-m-d H:i");
    $time = date('H:i');  

    $query = "SELECT `Name` FROM `users` WHERE PcNumber = '$pcNumber'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);


    if ($mail == '') {
        echo "";
    } else if ($name == '' or $studentNumber == '' or $pcNumber == '--'){
        echo "<script>alert('Вернитесь и введите все данные')</script>";
    }else if ($row['Name'] != 'Свободен'){
        echo "<script>alert('Место занято. Вернитесь назад и выберите место повторно')</script>";
    }  else {
        $queryValid = "SELECT `Name`, `Time`, `StudentNumber`, `Mail` FROM `banned` WHERE StudentNumber = '$studentNumber'";
        if ($resultValid = mysqli_query($connect, $queryValid)){
            $rowValid = mysqli_fetch_array($resultValid);
            if ($rowValid == null){
                $query1 = "UPDATE `users` SET `Name`='$name', `StudentNumber` = '$studentNumber', `Mail` = '$mail', `Time` = '$time' WHERE `PcNumber`='$pcNumber' LIMIT 1";
                $query2 = "INSERT INTO `today_users` (`id`, `Name`, `StudentNumber`, `Mail`, `PcNumber`, `Time`) VALUES('', '$name', '$studentNumber', '$mail', '$pcNumber', '$fulltime')";
                $query3 = "INSERT INTO `all_users` (`id`, `Name`, `StudentNumber`, `Mail`, `PcNumber`, `Time`) VALUES('', '$name', '$studentNumber', '$mail', '$pcNumber', '$fulltime')";        
                mysqli_query($connect, $query1);
                mysqli_query($connect, $query2);
                mysqli_query($connect, $query3);
                header('Location: ../main.php');
            }else{
                echo "<script>alert('Вы забанены, срок бана - ".$rowValid['Mail'].", дата бана - ".$rowValid['Time']."')</script>";
            }
        }
    }

    // if ($mail == '') {
    //     echo "";
    // } else if ($name == '' or $studentNumber == '' or $pcNumber == '--'){
    //     echo "<script>alert('Вернитесь и введите все данные')</script>";
    // }else if ($row['Name'] != 'Свободен'){
    //     echo "<script>alert('Место занято. Вернитесь назад и выберите место повторно')</script>";
    // }  else {
    //     $queryValid = "SELECT `Mail`, `Time`  FROM `banned`";
    //     $resultValid = mysqli_query($connect, $queryValid);
    //     $rowValid = mysql_fetch_array($resultValid);
    //     if($rowValid['Mail'] != $mail){
    //         $queryBan = "SELECT `StudentNumber`, `Mail`, `Time` FROM `banned`";
    //         $resultBan = mysqli_query($connect, $queryBan);
    //         $rowBan = mysqli_fetch_array($resultBan);
    //         if($rowBan['StudentNumber'] != $studentNumber){
    //             $query1 = "UPDATE `users` SET `Name`='$name', `StudentNumber` = '$studentNumber', `Mail` = '$mail', `Time` = '$time' WHERE `PcNumber`='$pcNumber' LIMIT 1";
    //             $query2 = "INSERT INTO `today_users` (`id`, `Name`, `StudentNumber`, `Mail`, `PcNumber`, `Time`) VALUES('', '$name', '$studentNumber', '$mail', '$pcNumber', '$fulltime')";
    //             $query3 = "INSERT INTO `all_users` (`id`, `Name`, `StudentNumber`, `Mail`, `PcNumber`, `Time`) VALUES('', '$name', '$studentNumber', '$mail', '$pcNumber', '$fulltime')";        
    //             mysqli_query($connect, $query1);
    //             mysqli_query($connect, $query2);
    //             mysqli_query($connect, $query3);
    //             header('Location: ../main.php');   
    //         }else {
    //             echo "<script>alert('Вы забанены, срок бана - ".$rowBan['Mail'].", дата бана - ".$rowBan['Time']."')</script>";
    //         }
    //     } else{
    //         echo "<script>alert('Вы забанены, срок бана - ".$rowValid['Mail'].", дата бана - ".$rowValid['Time']."')</script>";
    //     }
    // }



    function pcEmploy($connect, $pcNum){
        $query = "SELECT `Name`, `Time`, `StudentNumber` FROM `users` WHERE PcNumber = '$pcNum'";
        if ($result = mysqli_query($connect, $query)){
            while($row = mysqli_fetch_array($result)){
                $queryFav = "SELECT `StudentNumber` FROM `favourites` WHERE StudentNumber = '".$row['StudentNumber']."'";
                $resultFav = mysqli_query($connect, $queryFav);
                $rowFav = mysqli_fetch_array($resultFav);
                if ($rowFav != null){
                    echo "<p class='leave pcnumer'>".$row['Name']." 👾</p>";
                } else {
                    echo "<p class='leave pcnumer'>".$row['Name']."</p>";
                   
                }     
                if ($row['Name'] != 'Свободен'){
                    echo "<p class='leave timeout'>".$row['Time']." - Время завершения сеанса</p>";
                }           
            }
        }
    }

    function onlineKab($connect, $id){
        $query = "SELECT `Name` FROM `users` WHERE id = '11'";
        if ($result = mysqli_query($connect, $query)){
            $row = mysqli_fetch_array($result);
            if ($row['Name'] == 'Открыто'){
                echo "<h1 class='heading' style='margin-bottom: 20px; color: green;'>Открыто</h1>";
            } else {
                echo "<h1 class='heading' style='margin-bottom: 20px; color: #ff0047;'>Закрыто</h1>";
            }
        }
    }

    function vkpost1($connect, $id){
        $query = "SELECT `Name` FROM `users` WHERE id = '12'";
        if ($result = mysqli_query($connect, $query)){
            $row = mysqli_fetch_array($result);
            echo $row['Name'];
        }
    }
    
    function vkpost2($connect, $id){
        $query = "SELECT `StudentNumber` FROM `users` WHERE id = '12'";
        if ($result = mysqli_query($connect, $query)){
            $row = mysqli_fetch_array($result);
            echo $row['StudentNumber'];
        }
    }
    
    function vkpost3($connect, $id){
        $query = "SELECT `Mail` FROM `users` WHERE id = '12'";
        if ($result = mysqli_query($connect, $query)){
            $row = mysqli_fetch_array($result);
            echo $row['Mail'];
        }
    }

    function statView($connect, $table){
        $query = "SELECT `Name`, `StudentNumber`, `PcNumber`, `Time`, `Mail`  FROM `$table`";
        if ($result = mysqli_query($connect, $query)){
            while($row = mysqli_fetch_array($result)){
                echo '
                    <div class="statistik-item">
                        <p class="statistik-text statistik-name" style="margin-left:15px">'.$row['Name'].'</p>
                        <p class="statistik-text">'.$row['StudentNumber'].'</p>
                        <p class="statistik-text statistik-pc">'.$row['PcNumber'].'</p>
                        <p class="statistik-text statistik-date">'.$row['Time'].'</p>
                        <p class="statistik-text">'.$row['Mail'].'</p>
                    </div>
                ';
            }
        }
    };


?>