<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style_contacts.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<title>Gallery Julia Reznichenko</title>
</head>

<body>



<header>
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 mb-3 bg-light border-bottom shadow-sm" >
	<a href="index1.php">
		<img src="images/JR.png" alt="Логотип" title="Логотип" />
	</a>
	<a class="my-0 mr-md-auto"></a>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="py-2 text-dark" href="about.php"><div class="zagolovok">Обо мне</a>
		<a class="p-2 text-dark" href="gallery.php">Галерея</a>
		<a class="p-2 text-dark" href="contacts.php">Обратная связь</div></a>
	</nav>
	<a class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Войти</a>
</div>
</header>


<div class="container">
	<section class="jumbotron">
		<h1 class="mycontainer">Contact
			<img src="images/line.PNG" class="line_about">
		</h1></br>
		<form id="mailForm">
			<input type="email" id="email" name="email" placeholder="Email" class="form-control"></br>
			<input type="text" id="name" name="name" placeholder="Введите имя" class="form-control"></br>
			<textarea id="message" name="message" placeholder="Сообщение" class="form-control"></textarea></br>
			<button type="button" id="sendMail" class="btn btn-outline-secondary">Отправить</button>
		</form>
		<div id="errorMess"></div>
	</section>
</div>

<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script src="js/formMail.js"></script>


<footer class="pt-4 my-md-5 pt-md-5 border-top">
<div class="container">
	<div class="row">
		<div class="col">
			<div class="text-center">
				<h6>Instagram</h6>
				<a href="https://www.instagram.com/epitet4/">
					<img class="inst" src="images/inst.PNG" alt="" width="50" height="50">
				</a>
			</div>
		</div>
		<div class="col">
			<div class="text-center">
				<h6>VK</h6>
				<a href="https://vk.com/jagr121">
					<img class="vk" src="images/vk.PNG" alt="" width="50" height="50">
				</a>
			</div>
		</div>
		<div class="col">
			<div class="text-center">
				<h6>Telegramm</h6>
				<a href="https://t.me/jagr121">
					<img class="telegramm" src="images/telegram.PNG" alt="" width="50" height="50">
				</a>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>


</footer>

</body>

</html>