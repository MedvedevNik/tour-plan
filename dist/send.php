<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';


//variables
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

//message
$title = "Новое обращение Best Tour Plan";
if ($email == '') {
    $body = "<h2>Новое обращение</h2>
<b>Имя: </b>$name<br>
<b>Телефон: </b>$phone<br>
<b>Сообщение: </b><br>$message
";} elseif ($email != '' && $name != '' && $email != '') {
    $body = "<h2>Новое обращение</h2>
<b>Имя: </b>$name<br>
<b>Почта: </b>$email<br>
<b>Телефон: </b>$phone<br>
<b>Сообщение: </b><br>$message
";} else {
    $body = "
<h2>Новое обращение</h2>
<b>Почта: </b>$email<br>
";
}



$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'medvedevklaus@gmail.com'; // Логин на почте
    $mail->Password   = '161272383Qwe'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('medvedevklaus@gmail.com', 'Николай Медведев'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('pengu1n4ik.pi@yandex.ru');

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

    // Проверяем отравленность сообщения
    if ($mail->send()) {$result = "success";} 
    else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thanks.php');