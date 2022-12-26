<?php

$recepient = "valeriy.titovych@gmail.com";
$sitename = "FormApp";

$name = trim($_POST ["name"]);
$surname = trim($_POST ["surname"]);
$email = trim($_POST ["email"]);
$tel = trim($_POST ["tel"]);
$text = trim($_POST ["text"]);
$message = "Ім'я: $name \nПрізвище: $surname \nemail: $email \nНомер телефону: $phone \nТекст: $text";

$pagetitle = "Нові контактні дані з сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain, charset=\"utf-8\"\n Form: $recepient);