<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>

</head>
<body>

    <div class="form-container">
        <div class="form-text-wrapper">
            <h2>Форма регистрации</h2>
            <div id="message"></div>

        </div>
        <form class="ajax-form" id="form">

            <lable id="login-lable">Логин</lable>
            <input class="ajax-form__input form-control" type="text" name="login">
            <lable id="pass-lable">Пароль</lable>
            <input class="ajax-form__input form-control" type="password" name="password">
            <lable id="rep-pass-lable">Повтор пароля</lable>
            <input class="ajax-form__input form-control" type="password" name="repPassword">
            <button class="form-btn btn btn-primary" type="submit" id="form-sub-btn">
                <div  class="btn-spinner spinner-border" role="status" id="form-spinner">
                    <span class="sr-only">Отправить</span>
                </div>
                <span class="btn-text" id="button-text">Отправить</span>

            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="./script.js" ></script>
</body>
</html>


