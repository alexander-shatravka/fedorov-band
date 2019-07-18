<?php
    $service = $_POST['service'] ? $_POST['service'] : 'не указано';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    // $email = $_POST['email'];
    $message = $_POST['message'];

    $token = "696472715:AAEjwnDGbq27F6D6srHGHgNfJyXL_be5XTw";
    $chat_id = "-374948263";

    $arr = array(
        'услуга: ' => $service,
        'имя: ' => $name,
        'телефон: ' => $phone,
        // 'почта: ' => $email,
        'сообщение: ' => $message,
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
?>