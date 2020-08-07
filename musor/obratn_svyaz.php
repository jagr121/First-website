<?php
session_start ();
if (isset($_POST["send"]))
{
	$from = htmlspecialchars($_POST["from"]);
	$to = htmlspecialchars($_POST["to"]);
	$subject = htmlspecialchars($_POST["subject"]);
	$message = htmlspecialchars($_POST["message"]);
	$_SESSION["from"] = $from;
	$_SESSION["to"] = $to;
	$_SESSION["subject"] = $subject;
	$_SESSION["message"] = $message;
	$error_from = "";
	$error_to = "";
	$error_subject = "";
	$error_message = "";
	if ($from == "" || !preg_match ("/@/", $from))
	{
		$error_from = "Введите корректный email";
		$erorr = true;
	}
	if ($to == "" || !preg_match ("/@/", $to))
	{
		$error_to = "Введите корректный email";
		$erorr = true;
	}
	if (strlen($subject) == 0)
	{
		$error_subject = "Введите тему сообщения";
		$erorr = true;
	}
	if (strlen($message) == 0)
	{
		$error_message = "Введите сообщение";
		$erorr = true;
	}
	if (!$error)
	{
		$subject = "=?utf-8?B?".base64_encode($subject)."?=";
		$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text\plain; charset=utf-8\r\n";
		mail ($to, $subject, $message, $headers);
		header ("Location: success.php?send=1");
		exit;
	}
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<title>Gallery Julia Reznichenko</title>
</head>
<body>
<!--------------Панель-------------->
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 mb-3 bg-light border-bottom shadow-sm" >
	<a href="index1.html">
		<img src="images/JR.png" alt="Логотип" title="Логотип" />
	</a>
	<a class="my-0 mr-md-auto"></a>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="py-2 text-dark" href="about.html"><div class="zagolovok">Обо мне</a>
		<a class="p-2 text-dark" href="gallery.html">Галерея</a>
		<a class="p-2 text-dark" href="contacts.html">Обратная связь</div></a>
	</nav>
	<a class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"href="<?=?>">Войти</a>
</div>
<!---------Основная часть--------->
<div class="container">
		<h1>Форма обратной свзяи</h1>
		<form>
			<input type="email "name="email" placeholder="Email" class="form-control">
			<label>От кого: </label></br>
			<input type="text" name="from" value="<?=$_SESSION["from"]?>"/></br>
			<span style="color: red"><?=$error_from?></span>
			<label>Кому: </label></br>
			<input type="text" name="to" value="<?=$_SESSION["to"]?>" /></br>
			<span style="color: red"><?=$error_to?></span>
			<label>Тема: </label></br>
			<input type="text" name="subject" value="<?=$_SESSION["subject"]?>" /></br>
			<span style="color: red"><?=$error_subject?></span>
			<label>Сообщение: </label></br>
			<textarea name="message" cols="30" rows="10" value="<?=$_SESSION["message"]?>" > </textarea></br>
			<span style="color: red"><?=$error_message?></span>
			<input type="submit" name="send" value="Отправить" />
		</form>
		
</div>





</body>
</html>