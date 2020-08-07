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
		<a class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" >Войти</a>
	</div>
</header>


<!---------Основная часть--------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide">
				<rect fill="#777" width="100%" height="100%"></rect>
			</svg>
			<div class="container">
				<div class="carousel-caption text-left">
					<h1>История</h1>
					<p>Галере́я (фр. galerie, от итал. galleria) — вытянутое в длину крытое помещение или переход между частями здания или соседними зданиями. 
					Происходит из итальянского языка, где означает церковная паперть. Удобство размещения экспозиций в галереях привело к тому, что галереями стали называть художественные музеи или их части вообще, 
					без привязки к архитектурным особенностям. Современная архитектура продолжает использовать галереи, но их активно стали вытеснять онлайн галереи, 
					основное преимущество которых неограниченное пространство для презентации своих работ.</p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide">
				<rect fill="#666" width="100%" height="100%"></rect>
			</svg>
			<div class="container">
				<div class="carousel-caption text-left">
					<h1>Обо мне</h1>
					<p>Приветствую тебя на моем экспериментальном сайте-визитке. Для того чтобы узнать обо мне больше, перейди в раздел "Обо мне". Давай знакомиться. Меня зовут Юля...</p>
					<div class="btn-group">
						<a role="button" href="about.php" class="btn btn-sm btn-outline-secondary" style="color: white">Перейти</a>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide">
				<rect fill="#555" width="100%" height="100%"></rect>
				<div class="container">
					<div class="carousel-caption text-left">
						<h1>Галерея</h1>
						<p>Представляю вашему вниманию мою фотогалерею, в ней представлены фото, которые имеют за собой определенную историю и именно это делает их живыми и волшебными
						<div class="btn-group">
							<a role="button" href="gallery.php" class="btn btn-sm btn-outline-secondary" style="color: white">Перейти</a>
						</div>
						</p>
					</div>
				</div>
			</svg>
		</div>
		<div class="carousel-item">
			<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Fourth slide">
				<rect fill="#444" width="100%" height="100%"></rect>
			</svg>
			<div class="container">
				<div class="carousel-caption text-left">
					<h1>Обратная связь</h1>
					<p>Здесь ты можешь поделиться своим мнением о моих работах или просто написать мне что-то приятное...
					<div class="btn-group">
						<a role="button" href="contacts.php" class="btn btn-sm btn-outline-secondary" style="color: white">Перейти</a>
					</div>
					</p>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>



<footer class="pt-4 my-md-5 pt-md-5 border-top">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="text-center">
					<h6 style="text-indent: 0em">Instagram</h6>
					<a href="https://www.instagram.com/epitet4/">
						<img class="inst" src="images/inst.PNG" alt="" width="50" height="50">
					</a>
				</div>
			</div>
			<div class="col">
				<div class="text-center">
					<h6 >VK</h6>
					<a href="https://vk.com/jagr121">
						<img class="vk" src="images/vk.PNG" alt="" width="50" height="50">
					</a>
				</div>
			</div>
			<div class="col">
				<div class="text-center">
					<h6 style="text-indent: 0em">Telegramm</h6>
					<a href="https://t.me/jagr121">
						<img class="telegramm" src="images/telegram.PNG" alt="" width="50" height="50">
					</a>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</footer>


</body>