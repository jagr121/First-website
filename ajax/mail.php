<?php
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['message'];

  $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

  $success = mail("reznicheko98@gmail.com", $subject, $message, $headers);
  echo $success;
 ?>
