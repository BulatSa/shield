<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<title>Щит и меч</title>

	<!-- favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/site.webmanifest">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#004dd8">
	<!-- favicons -->

	<!-- og -->
	<meta property="og:title" content="Щит и меч">
	<meta property="og:description" content="Описание проекта">
	<meta property="og:type" content="website">
	<meta property="og:image" content="/img/og.jpg">
	<!-- og -->

	<link href="css/main.css" rel="stylesheet">
</head>

<body>


<div class="burger">
	<figure></figure>
</div>


<div class="mob-panel">
	<div class="top-nav__phone">
		<a href="tel:8(800)6001617">8 (800) 600 16 17</a>
		<span>Бесплатная горячая линия</span>
	</div>
	<nav class="mob-nav">
		<ul>
			<li><a href="/" class="active">Главная</a></li>
			<li><a href="/about.php">О компании</a></li>
			<li><a href="/services.php">Сервисы</a></li>
			<li><a href="#">Гарантии</a></li>
			<li><a href="/reviews.php">Отзывы</a></li>
			<li><a href="/blog.php">Блог</a></li>
			<li><a href="/contacts.php">Контакты</a></li>
			<li><a href="#" class="blue">Личный кабинет</a></li>
		</ul>
	</nav>
	<div class="top-nav__lang">
		<a href="#" class="active" title="Русская версия">RUS</a>
		<a href="#" title="English version">ENG</a>
	</div>
</div>


<section class="top-panel">
	<div class="container">

		<a href="/" class="top-panel__logo" title="На главную">
			<img src="/img/top-logo.png" alt="Логотип Щит и Меч">
		</a>

		<nav class="top-nav">
			<ul>
				<li><a href="/" class="active">Главная</a></li>
				<li><a href="/about.php">О компании</a></li>
				<li><a href="/services.php">Сервисы</a></li>
				<li><a href="#">Гарантии</a></li>
				<li><a href="/reviews.php">Отзывы</a></li>
				<li><a href="/blog.php">Блог</a></li>
				<li><a href="/contacts.php">Контакты</a></li>
				<li><a href="#" class="blue">Личный кабинет</a></li>
			</ul>
		</nav>

		<div class="top-nav__right">
			<div class="top-nav__phone">
				<a href="tel:8(800)6001617">8 (800) 600 16 17</a>
				<span>Бесплатная горячая линия</span>
			</div>

			<div class="top-nav__lang">
				<a href="#" class="active" title="Русская версия">RUS</a>
				<a href="#" title="English version">ENG</a>
			</div>
		</div>
	</div>
</section>


<? if($_SERVER['REQUEST_URI'] != '/' and $_SERVER['REQUEST_URI'] != '/index.php') :?>
<section class="s-breadcrumbs">
	<div class="container">
		<ul class="breadcrumbs">
			<li><a href="/">Главная</a></li>
			<li><a href="/">Блог</a></li>
			<li><span>Соглашение на обработку персональных данных</span></li>
		</ul>
	</div>
</section>
<? endif; ?>