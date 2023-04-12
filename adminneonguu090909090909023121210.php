<?php
    require_once 'vendor/login.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecss/style.css" />
    <link rel="icon" type="image/png" href="./images/favicon.png"/>
    <script type="text/javascript" src="javascript/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Админ Панель</title>
</head>
<body>

    <!--MAIN -->
    <div class="main">
        <!--header и меню-->
        <div class="header">
        <img id="headerimg" src="images/headerimg.png" alt="eror">
        <img id="headerimg-mobile" style="display: none;" src="images/headerimg-mobile.png" alt="eror">
            <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pcs">Занятость</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#timing">Расписание</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#competition">Турниры</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Информация</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!--слайдер-->
        <div id="carouselExampleControls" class="carousel slide slider" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slide1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/slide2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/slide3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Следующий</span>
            </button>
          </div>


        <!--Кнопки компьютеров-->
       <div id = "pcs" class="content">
            <div class="container">
                <h1 class = "heading">Проверь свободные места</h1>
                <div class="btn-online">
                    <form action="./vendor/online.php" method="post">
                        <button type="submit" class="btn btn-light" name='buttonOnline'>Открыто</button>
                    </form>
                    <form action="./vendor/ofline.php" method="post">
                        <button type="submit" class="btn btn-danger" name='buttonOfline'>Закрыто</button>
                    </form>
                </div>
                <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
                    <div class="rowrow">
                        <div class="col">
                            <div class="cabnum"><h2 class="cabnumtext">21</h2></div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc21-1">
                                        1
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc21-2">
                                        2
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc21-3">
                                        3
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc21-4">
                                        4
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc21-5">
                                        5
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rowrow">
                        <div class="col">
                            <div class="cabnum"><h2 class="cabnumtext">35</h2></div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc35-1">
                                        1
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc35-2">
                                        2
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc35-3">
                                        3
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc35-4">
                                        4
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="pc">
                                <img class="pcimg" src="images/pcimg.png" alt="eror" />
                                <div style="display: flex">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pc35-5">
                                        5
                                    </button>
                                    <p class="timer" style="margin: 10px 0 0 10px">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps">
                    <div class="pc" style="display: flex;">
                        <img style="margin-right:10px" class="psimg" src="images/ps5.png" alt="eror" />
                        <div>
                            <div style="display: flex; margin-top:5px; height: 34px">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ps5-1">
                                    1
                                </button>
                                <p class="timer" style="margin: 10px 0 0 10px"></p>
                            </div>
                            <div style="display: flex; margin-top:15px; height: 34px" >
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ps5-2">
                                    2
                                </button>
                                <p class="timer" style="margin: 10px 0 0 10px"></p>
                            </div>
                            <div style="display: flex; margin-top:15px; height: 34px">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ps5-3">
                                    3
                                </button>
                                <p class="timer" style="margin: 10px 0 0 10px"></p>
                            </div>
                            <div style="display: flex; margin-top:15px; height: 34px">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ps5-4">
                                    4
                                </button>
                                <p class="timer" style="margin: 10px 0 0 10px"></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>

        <h1 class = "heading" id='stat' style="margin: 20px auto;">Статистика</h1>
        <div class="statistik">
            <div class="statistik-header">
                <a class="statistik-link" href="#">Все время</a>
                <a class="statistik-link" href="#">Сегодня</a>
                <a class="statistik-link" href="#">Бан-лист</a>
                <a class="statistik-link" href="#">VIP</a>
                <input type="text" class="form-control" id='statistik-filter' style="height:40px; width: 250px" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" placeholder="Введите имя">
                <input type="text" class="form-control" id='statistik-filter-date' style="height:40px; width: 200px" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" placeholder="Дата">
                <input type="text" class="form-control" id='statistik-filter-pc' style="height:40px; width: 150px" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" placeholder="№ компьютера">
            </div>
            <div class="stat-row none" data-id='Сегодня'>
                <div class="statistik-item">
                    <p class="statistik-text" style="margin-left:15px; font-weight: bold">Имя</p>
                    <p class="statistik-text" style="font-weight: bold">Студенческий</p>
                    <p class="statistik-text" style="font-weight: bold">Номер компьюера</p>
                    <p class="statistik-text" style="font-weight: bold">Время</p>
                </div>
                <?php
                   statView($connect, 'today_users')
                ?>         
            </div>
            <div class="stat-row none" data-id='Все время'>
                <div class="statistik-item">
                    <p class="statistik-text" style="margin-left:15px; font-weight: bold">Имя</p>
                    <p class="statistik-text" style="font-weight: bold">Студенческий</p>
                    <p class="statistik-text" style="font-weight: bold">Номер компьюера</p>
                    <p class="statistik-text" style="font-weight: bold">Дата и время</p>
                </div>
                <?php
                   statView($connect, 'all_users')
                ?>         
            </div>
            <div class="stat-row none" data-id='Бан-лист'>
                <div class="statistik-item">
                    <p class="statistik-text" style="margin-left:15px; font-weight: bold">Имя</p>
                    <p class="statistik-text" style="font-weight: bold">Студенческий</p>
                    <p class="statistik-text" style="font-weight: bold">Дата добавления</p>
                    <p class="statistik-text" style="font-weight: bold">Срок</p>
                </div>
                <?php
                   statView($connect, 'banned')
                ?>         
            </div>
            <div class="stat-row none" data-id='VIP'>
                <div class="statistik-item">
                    <p class="statistik-text" style="margin-left:15px; font-weight: bold">Имя</p>
                    <p class="statistik-text" style="font-weight: bold">Студенческий</p>
                    <p class="statistik-text" style="font-weight: bold">Дата добавления</p>
                </div>
                <?php
                   statView($connect, 'favourites')
                ?>         
            </div>
        </div>
        <form action="./vendor/clear.php" method="post" style="margin: 30px auto; width: 162px">
            <button class='btn btn-danger'>Очистить за сегодня</button>
        </form>


        <!--ТУРНИРЫ-->
        
        <div class="accordion" id="accordionExample" style="width: 500px; margin: 20px auto;">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button style="width:auto; margin: 0 auto" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    VIP
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form class='vkpost' action="./vendor/fav.php" method="post">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ФИО</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='name'>
                        <span class="input-group-text" id="inputGroup-sizing-sm">Студенческий</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='studNum'>
                        <button type="submit" class="btn btn-light" name='btnFav' value='1' style="margin-top:20px">Добавить</button>
                        <button type="submit" class="btn btn-danger" name="btnFav" value='2' style="margin-top:20px">Убрать</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button style="width:auto; margin: 0 auto" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Забанить/Разбанить
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form class='vkpost' action="./vendor/ban.php" method="post">
                        <span class="input-group-text" id="inputGroup-sizing-sm">ФИО</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='name'>
                        <span class="input-group-text" id="inputGroup-sizing-sm">Студенческий</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='studNum'>
                        <span class="input-group-text" id="inputGroup-sizing-sm">Срок</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='timeBan'>
                        <button type="submit" class="btn btn-danger" name='btnBun' value='1' style="margin-top:20px">Забанить</button>
                        <button type="submit" class="btn btn-light" name="btnBun" value='2' style="margin-top:20px">Разбанить</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button style="width:auto; margin: 0 auto" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ВК ПОСТ
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form class='vkpost' action="./vendor/vkpost.php" method="post">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Ключ 1</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='key1'>
                        <span class="input-group-text" id="inputGroup-sizing-sm">Ключ 2</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='key2'>
                        <span class="input-group-text" id="inputGroup-sizing-sm">Ключ 3</span>
                        <input type="text" class="form-control" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-sm" name='key3'>
                        <button type="submit" class="btn btn-light" name='vkpostBtn' style="margin-top:20px">Опубликовать</button>
                    </form>
                </div>
                </div>
            </div>
        </div>


        <!--Подвал-->
        <div class="footer">
            <h2 class="cabinf">ЦИТ 21 и 35 каб.</h2>
        </div>
    </div>


    <!--Открывашки компьюеров-->

    <div class="modal fade" id="pc21-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">21-1</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '21-1');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="21-1">Покинуть</button>
                    </form>
                    <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc21-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">21-2</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '21-2');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="21-2">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc21-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">21-3</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '21-3');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="21-3">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc21-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">21-4</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '21-4');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="21-4">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc21-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">21-5</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '21-5');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="21-5">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc35-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">35-1</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '35-1');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="35-1">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc35-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">35-2</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '35-2');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="35-2">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc35-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">35-3</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '35-3');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="35-3">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc35-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">35-4</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '35-4');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="35-4">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pc35-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Компьютер <span class="pc-num-popup">35-5</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, '35-5');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="35-5">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="ps5-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PlayStation 5 (1)<span style="display:none" class="pc-num-popup">ps5-1</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, 'ps5-1');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="ps5-1">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ps5-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PlayStation 5 (2)<span style="display:none" class="pc-num-popup">ps5-2</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, 'ps5-2');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="ps5-2">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ps5-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PlayStation 5 (3)<span style="display:none" class="pc-num-popup">ps5-3</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, 'ps5-3');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="ps5-3">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ps5-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PlayStation 5 (4)<span style="display:none" class="pc-num-popup">ps5-4</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        pcEmploy($connect, 'ps5-4');
                    ?>
                </div>
                <div class="modal-footer">
                    <form action="vendor/logout.php" method="post">
                        <button class="btn btn-danger" name="buttonLeave" type="submit" value="ps5-4">Покинуть</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>


    
    <script>

        
        
        document.querySelectorAll('.statistik-text').forEach(item=>{
            if (item.textContent == "" || item.textContent == "1"){
                item.style.display = 'none'
            }
        });
        document.querySelector('#statistik-filter').addEventListener('input', (e)=>{
            document.querySelectorAll('.statistik-name').forEach(item =>{
                if(item.textContent.indexOf(document.querySelector('#statistik-filter').value) == -1){
                    item.parentElement.classList.add('none')
                } else{
                    item.parentElement.classList.remove('none')
                }

            })
        });

        document.querySelector('#statistik-filter-pc').addEventListener('input', (e)=>{
            document.querySelectorAll('.statistik-pc').forEach(item =>{
                if(item.textContent.indexOf(document.querySelector('#statistik-filter-pc').value) == -1){
                    item.parentElement.classList.add('none')
                } else{
                    item.parentElement.classList.remove('none')
                }

            })
        });

        document.querySelector('#statistik-filter-date').addEventListener('input', (e)=>{
            document.querySelectorAll('.statistik-date').forEach(item =>{
                if(item.textContent.indexOf(document.querySelector('#statistik-filter-date').value) == -1){
                    item.parentElement.classList.add('none')
                } else{
                    item.parentElement.classList.remove('none')
                }

            })
        });


        document.querySelectorAll('.statistik-link').forEach(item =>{
            item.addEventListener('click', (e)=>{
                e.preventDefault();
                document.querySelectorAll('.statistik-link').forEach(el =>{
                    if (el.classList.contains('active-bun-btn')){
                        el.classList.remove('active-bun-btn');
                    };
                });
                item.classList.add('active-bun-btn');
                document.querySelectorAll('.stat-row').forEach(el =>{
                    if(item.textContent == el.getAttribute('data-id')){
                        el.classList.remove('none');
                    }else{
                        el.classList.add('none')
                    }
                });
            });
        });



        document.querySelectorAll('.pcnumer').forEach(item =>{
            if (item.innerHTML!='Свободен'){
                const pcnum = item.parentNode.parentNode.parentNode.parentNode.getAttribute('id').substring(2, 7);
                document.querySelectorAll('.pc').forEach(el =>{
                    const pcbtn = el.querySelector('.btn').getAttribute('data-bs-target').substring(3, 7);
                    if (pcnum == pcbtn){
                        el.style.borderBottom = '5px solid #ff0047';
                        el.style.paddingBottom = '10px';
                        el.borderRadius = '6px';
                    }
                })
            }
        })
        document.querySelectorAll('.timeout').forEach(item =>{
            if (item.parentElement.querySelector('.pcnumer').textContent.indexOf('👾')== -1){
                item.innerHTML = item.textContent[0] + (parseInt(item.textContent[1]) + 2) + item.textContent.slice(2);
            } else{
                item.innerHTML = item.textContent[0] + (parseInt(item.textContent[1]) + 4) + item.textContent.slice(2);
            }
        })



        document.querySelectorAll('.timeout').forEach(item =>{
            var thisTime = item.textContent.slice(0,5);
            var pcNumber = item.parentElement.parentElement.parentElement.parentElement.getAttribute('id');
            var timer = document.querySelector(`.btn-primary[data-bs-target="#${pcNumber}"]`).parentNode.querySelector('.timer');
            var thisDate = new Date().toDateString();
            var countDownDate = new Date(`${thisDate.slice(4, 7)} ${thisDate.slice(8, 10)}, ${thisDate.slice(11, 15)} ${thisTime}:00`).getTime();

            // Обновление оставшегося времени каждую секунду
            var x = setInterval(function() {

            // Получение текущей даты и времени
            var now = new Date().getTime();

            // Вычисление времени до цели
            var distance = countDownDate - now;

            // Вычисление временных единиц
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Вывод обновленного счетчика времени в элемент с id = "countdown"
            timer.innerHTML = hours + "ч "
            + minutes + "м " + seconds + "с ";

            // Если обратный отсчет закончен, вывести сообщение
            if (distance < 0) {
                clearInterval(x);
                timer.innerHTML = "Время истекло!";
            }
            }, 1000);
        });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</body>
</html>