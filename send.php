<?php

$yourname = $_POST['yourname'];
$yourphone = $_POST['yourphone'];
$yourtext = $_POST['yourtext'];

if (mail("masha_skakovskay@mail.ru", "Запрос о консультации", "Имя:".$yourname.". Телефон: ".$yourphone.". Запрос: ".$yourtext , "From: http://ambrosius.p-host.in/\r\n"));
  {
    echo "Сообщение успешно отправлено";
  } else {
    echo "при отправке сообщения возникли ошибки"
  }
