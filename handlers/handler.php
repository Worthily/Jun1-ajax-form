<?php
$login = $_POST['login'];
$password = $_POST['password'];
$repPassword = $_POST['repPassword'];



function setResponse ($httpHeader = '500',$formStatus = '500',$msg = 'ошибка со стороны сервера') {
    $newResponse["httpHeader"] = $httpHeader;
    $newResponse["formStatus"] = $formStatus;
    $newResponse["msg"] = $msg;
    return $newResponse;
}

if (empty($login)) {
    sleep(3);
    $response = setResponse('409','2','Поле логин не заполнено');
    http_response_code('409');
    echo json_encode($response);

} elseif (empty($password)) {
    $response = setResponse('409','3','Поле пароль не заполнено');
    sleep(3);
    http_response_code('409');
    echo json_encode($response);
} elseif (empty($repPassword)) {
    $response = setResponse('409','4','Поле повтор пароля не заполнено');
    sleep(3);
    http_response_code('409');
    echo json_encode($response);
} elseif ($repPassword !== $password) {
    $response = setResponse('409','5','пароли не совпадают');
    sleep(3);
    http_response_code('409');
    echo json_encode($response);
} else {
    $response = setResponse('200','1','Регистрация прошла успешно');
    sleep(3);
    http_response_code('200');
    echo json_encode($response);
}