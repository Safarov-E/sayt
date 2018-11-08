<?php

$recepient = 'sup0rtperm.dom.ru@yandex.ru';
$sitename = "perm.domru.ru";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mail = trim($_POST["mail"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $phone  \nПочта: $mail \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");