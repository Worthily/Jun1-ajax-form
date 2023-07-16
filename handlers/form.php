<?php
$login = $_POST['login'];
$password = $_POST['password'];
$repPassword = $_POST['repPassword'];


function generateResponseObject ( /*Статус формы*/ $formStatus = '0',$msg = 'ошибка со стороны сервера') {
    $newResponseObject["formStatus"] = $formStatus;
    $newResponseObject["msg"] = $msg;
    return $newResponseObject;
}


if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    if (empty(str_replace(' ', '', $login))) {

        sleep(3);
//        http_response_code('404');
//        http_response_code('500');
        $responseObject = generateResponseObject('2','Поле логин не заполнено');
//        echo $responseObject;
        echo json_encode($responseObject);

    } elseif (empty(str_replace(' ', '', $password))) {

        sleep(3);
        $responseObject = generateResponseObject('3','Поле пароль не заполнено');
        echo json_encode($responseObject);

    } elseif (empty(str_replace(' ', '', $repPassword))) {

        sleep(3);
        $responseObject = generateResponseObject('4','Поле повтор пароля не заполнено');
        echo json_encode($responseObject);

    } elseif ($repPassword !== $password) {

        sleep(3);
        $responseObject = generateResponseObject('5','пароли не совпадают');
        echo json_encode($responseObject);

    } else {

        sleep(3);
        $responseObject = generateResponseObject('1','Регистрация прошла успешно');
        echo json_encode($responseObject);

    }

}

