<?php

$address = "inmed@integramed.info";
$from = 'No-reply@hobl-online.ru';
$sitename = "Задать вопрос специалисту (HOBL-ONLINE.RU)";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$page = trim($_POST["page"]);
$text = trim($_POST["text"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \nТелефон: $phone\nE-mail: $email\nЗаявка со страницы: $page\nВопрос: $text";

mail ($address, $sitename, $message,"Content-type:text/plain; charset = charset=utf-8\r\nFrom:$from");
?>