<!-- <?php
    require_once 'vendor/login.php';
?> -->

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecss/style_login.css" />
    <link rel="icon" type="image/png" href="./images/favicon.png"/>
    <script type="text/javascript" src="javascript/login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Занять место</title>
</head>
<body>
    <div class="main">
        <img class="logoimg" src="images/NEON.png" alt="eror">

        <form action="vendor/login.php" method="post" style="padding: 5px">
            <div class="input-group mb-3 input-for-auth" style="flex-direction: column; width: 97%; margin-left: 10px;">
                <h2 class="spectext">ФИО</h2>
                <input style="width: 100%" type="text" class="form-control inputstyle" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3 input-for-auth" style="flex-direction: column; width: 97%; margin-left: 10px;">
                <h2 class="spectext">№ Студенческого</h2>
                <input style="width: 100%" type="text" class="form-control inputstyle" name="studentNumber" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" pattern="^\d{6}$" minlength="6" maxlength="6" title="Введите номер студенческого">
            </div>

            <div class="input-group mb-3 input-for-auth" style="display:none">
                <h2 class="spectext">Почта</h2>
                <input type="text" class="form-control inputstyle" name="mail" value='1' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3  input-for-auth" style="flex-direction: column; width: 97%; margin-left: 10px;">
                <h2 class="spectext">Компьютер</h2>
                <select style="width: 100%" class="form-select inputstyle" name="pcNumber" id="inputGroupSelect01">
                    <option selected>--</option>
                    <option value="21-1">21-1</option>
                    <option value="21-2">21-2</option>
                    <option value="21-3">21-3</option>
                    <option value="21-4">21-4</option>
                    <option value="21-5">21-5</option>
                    <option value="35-1">35-1</option>
                    <option value="35-2">35-2</option>
                    <option value="35-3">35-3</option>
                    <option value="35-4">35-4</option>
                    <option value="35-5">35-5</option>
                    <option value="ps5-1">PS5 Геймпад 1</option>
                    <option value="ps5-2">PS5 Геймпад 2</option>
                    <option value="ps5-3">PS5 Геймпад 3</option>
                    <option value="ps5-4">PS5 Геймпад 4</option>
                </select>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top: 3em">
                <button class="btn btn-primary" type="submit" style="background-color: #E51E40;">Занять Компьютер</button>
            </div>
        </form>
        <p class="agree">Нажимая кнопку, вы соглашаетесь с <span><a class="agree-link" href="./index.php#information">правилами клуба!</a></span></p>
    </div>
    <div class="footer">
        <h2 class="cabinf">ЦИТ 21 и 35 каб.</h2>
    </div>
    <script>
        document.querySelector('.btn.btn-primary').addEventListener('click', (e)=>{
            
            localStorage.setItem('pcNum', JSON.stringify(document.querySelector('#inputGroupSelect01').value));

            // if (parseInt(documen.querySelector('input[name="studentNumber"]').value / 100000) !== 1){
            //     e.preventDefault();
            //     alert('Неправильно введен номер студенческого');
            // } else {
            //     e.preventDefault();
            // }

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>