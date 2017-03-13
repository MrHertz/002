<?php
/**
 * Created by PhpStorm.
 * User: kilohertz
 * Date: 13.03.17
 * Time: 13:56
 */
$subject = "Заказ оформлен";
$message =  "Имя: ".$_POST['name'].
            "\nПочта: ".$_POST['email'].
            "\nТелефон: ".$_POST['phone'].
            "\nЗаказ: ".$_POST['message'];

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
mail('rus.syndicate@gmail.com', $subject, $message, $headers);
?>