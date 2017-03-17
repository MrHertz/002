<?php
/**
 * Created by PhpStorm.
 * User: kilohertz
 * Date: 13.03.17
 * Time: 13:56
 */
$email = 'support.magicwand@yandex.ru';
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

if (isset($_POST['subscribe'])) {
    mail($email, 'Подписка оформлена', $_POST['subscribe'], $headers);
    Header('Location: /');
    exit();
}

$subject = "Заказ оформлен";
$message =  "Имя: ".$_POST['name'].
            "\nПочта: ".$_POST['email'].
            "\nТелефон: ".$_POST['phone'].
            "\nЗаказ: ".$_POST['message'];

mail($email, $subject, $message, $headers);
Header('Location: /');
?>