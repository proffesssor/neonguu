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
    <title>NEON</title>
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
                <?php
                    onlineKab($connect, '11')
                ?>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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
                                    <p class="timer" style="margin: 10px 0 0 10px"></p>
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

            </div>



        <!--ТУРНИРЫ-->
        <div id="competition" style="width: 550px; margin: 2em auto;">
            <h1 class = "heading">Турниры</h1>
            <div id="vk_post_-<?php vkpost1($connect, '12') ?>_<?php vkpost2($connect, '12') ?>"></div>
        </div>


        <!-- ИНФОРМАЦИЯ -->

        <div id="information" style="width: 700px; margin: 2em auto;">
            <h1 class = "heading">Информация</h1>
            <div class="card-group">
                <div class="card">
                    <img src="./images/info1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Правила</h5>
                    <p class="card-text">1. Придя на территорию 21 и 35 кабинетов, уведомить об этом сотрудника НЕОНа. <br> 2. Никакой одежды и рюкзаков на столах, верхнюю одежду на вешалку.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/info2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Правила</h5>
                    <p class="card-text">3. Соблюдайте вежливость, ведь мы стараемся для вас. <br> 4. Принимать пищу за столом ЗАПРЕЩЕНО, так же держать открытые источники с водой.</p>
                    </div>
                </div>
                <div class="card">
                    <img style="height: 174px" src="./images/info3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Правила</h5>
                    <p class="card-text">5. Не оставлять после себя мусор и держать рабочее место в порядке. <br> 6. Не менять игровые девайсы между ПК и о любых действиях, касающихся имущества ГУУ, уведомлять сотрудника.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="media">
            <h1 class = "heading" style="margin-bottom: 30px">Социальные сети</h1>
            <div class="media-wrapper">
                <a href="https://vk.com/cyberguu"><img src="./images/vk.png" alt="vk"></a>
                <a href="https://www.twitch.tv/neon_sum"><img src="./images/twitch.png" alt="twitch"></a>
                <a href="https://discord.com/invite/T6yP3vRZ4E"><img src="./images/discord.png" alt="discord"></a>
                <a href="https://www.youtube.com/channel/UCZn0_b-eE0sfF5qdsL2t04g"><img src="./images/youtube.png" alt="youtube"></a>
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
        document.querySelectorAll('.pcnumer').forEach(item =>{
            if (item.innerHTML!='Свободен'){
                const pcnum = item.parentNode.parentNode.parentNode.parentNode.getAttribute('id').substring(2, 7);
                document.querySelectorAll('.pc').forEach(el =>{
                    const pcbtn = el.querySelector('.btn').getAttribute('data-bs-target').substring(3, 7);
                    if (pcnum == pcbtn){
                        el.style.borderBottom = '5px solid #E51E40';
                        el.style.paddingBottom = '10px';
                        el.borderRadius = '6px';
                    }
                })
            }
        })
    </script>

    <script>
        document.querySelectorAll(".modal-dialog").forEach(item =>{
            if ((item.querySelector('.pc-num-popup').textContent !== JSON.parse(localStorage.getItem('pcNum'))) || (localStorage.getItem('pcNum') === false)){
                item.querySelector('.btn-danger').style.display = "none";
            } else{
                item.querySelector(".btn-danger").addEventListener('click', ()=>{
                    localStorage.removeItem('pcNum');
                });
            }
        });
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
                          
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
    <script type="text/javascript">
        (function() { 
            VK.Widgets.Post("vk_post_-<?php vkpost1($connect, '12') ?>_<?php vkpost2($connect, '12') ?>", -<?php vkpost1($connect, '12') ?>, <?php vkpost2($connect, '12') ?>, '<?php vkpost3($connect, '12') ?>');
        }());
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</body>
</html>