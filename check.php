<?php


$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$square = trim($_POST['square']);
$weight = trim($_POST['weight']);
$country_buy = trim($_POST['country_buy']);
$city_buy = trim($_POST['city_buy']);
$field = trim($_POST['field']);
$city_deliv = trim($_POST['city_deliv']);

$message = "Имя: $name\r\n Телефон: $phone\n Площадь:$square \n Вес:$weight \n Страна покупки: $country_buy\n Город покупки: $city_buy \n Область доставки: $field \n Город доставки: $city_deliv\r\n ";

echo $message;

mail("andrey-popov03@mail.ru", "Заявка с сайта", $message ,"From: $email \r\n");
header('Location: index.php');