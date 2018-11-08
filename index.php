<?php 
					require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Пакеты услуг: Интернет и ТВ от провайдера Дом.ru в Перми</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="keywords" content="Дом.ru, объединенный, личный, кабинет, интернет, телефон, телефония, телевидение, hd, кабельное, цифровое, телевидение">
	 
	 <script src="js/script.js" defer></script>
	 <script src="js/script1.js" defer></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<h1><a href="index.php"><img class="imgi" src="img/logo.png" alt="logo"></a></h1>
			<span class="tel">7(342)2-195-195</span>
			<nav class="web1">
				<ul> 
					<li  class="curnet"><a href="index.php" title="home">ТВ + Интернет</a>
						<ul class="vpered">
							<li><a href="internet.php">Интернет</a></li>
							<li><a href="tv.php">Дом.ru&nbsp;TV</a></li>
						</ul>
					</li>
					<li><a href="services.php" title="">Акции</a></li>  
					<li><a href="portfolio.php" title="cont">Новости</a></li> 
					<li><a href="support.php" title="port">Поддержка</a></li>   
					<li><a href="about.php" title="serv">О нас</a></li>  
					<li><a href="contact.php" title="home">Личный кабинет</a></li>  
				</ul>
			</nav>
		</header>
		<section>
	 	 
		<?php if( isset($_SESSION['logged_user']) ) : ?>
			<div class="avtor">
				<ul class="class">	 
						<li class="wer1"><img src="img/men.png" alt="" width="60px" height="60px" ></li>
						<li class="wer2"><p>Пользователь авторизован! <br></p></li>
						<li class="wer3"><p>Добро пожаловать, <?php echo $_SESSION['logged_user']->login; ?></p></li>
				 
			 			 <li class="wer4"><a href="logout.php">Выйти</a></li>
				 </ul>
			</div>

		<?php else : ?>
			<div class="exit"> 
			 
			<p class="qwer">Вы не зарегистрированы </p>
			 
			<a href="contact.php" class="botr"><img src="img/if_Add-Male-User_49576.png" width="20px" height="20px" class="eer" alt="">Авторизоваться</a>
			<a href="registr.php" class="botr"><img src="img/if_Edit-Male-User_49585.png" width="20px" height="20px" class="eer" alt="">Регистрация</a> 
			</div>
		<?php endif; ?>
	</section>
		<div class="slider-block">
			<div class="flexslider">
				<ul id="slides">
					<li class="slide showing"><img src="img/sli3.jpg"   height="268" width="396"  alt=""></li>
					<li class="slide"><img src="img/sli2.jpg"  height="268" width="396"   alt=""></li>
					<li class="slide"><img src="img/sli1.jpg"  height="268" width="396"   alt=""></li>
					<li class="slide"><img src="img/sli4.jpg"  height="268" width="396"   alt=""></li>
				</ul>
			</div>
			<p>Будьте в курсе самых последних акций и предложений.</p>
			<p class="fs34">бонусы от Дом.ru</p> 
			<a href="registr.php" class="star">Подключиться</a>
		</div>
		<ul class="blurbs">
			<li class="qas1">
				<h3>Цены вашего тарифа</h3>
				<p>Стоимость аренды приставок по стоимости вашего тарифного плана</p>
			</li>
			<li class="qas2">
				<h3>Быстрое переключение</h3>
				<p>Свободно  перемещаясь по квартире  и за ее пределами.</p>
			</li>
			<li class="qas3">
				<h3>Домашний безлимит</h3>
				<p>Общайтесь с самыми близкими,  не задумываясь о времени. </p>
			</li>
		</ul>
		<ul class="midle-block">
			<li>
				<h2>Amedia Premium HD</h2>
				<img src="img/block1.png" width="265px" height="142"  alt="">
				<p>Премиальный пакет лучших сериалов Планеты. Смотрите премьеры сериалов одновременно со всем миром на AMEDIA Premium HD (звук Dolby 5.1.) или весь сезон сериала на AMEDIA HIT. Более 100 сериальных блокбастеров</p>
				<a href="" class="read">подробнее</a>
			</li>
			<li>
				<h2>VIP Viasat Premium</h2>
				<img src="img/block2.png" width="265px" height="142"  alt="">
				<p>Пакет телеканалов на любой вкус: премьерные показы самых кассовых фильмов и мультфильмов, эксклюзивные сериалы, мировые кинохиты, первоклассные передачиНаш футбол HD</p>
				<ul class="design">
					<details><summary>Преимущества</summary><li><a href="#" title="link">ИЗОБРАЖЕНИЕ ВЫСОКОЙ ЧЕТКОСТИ,ОБЪЕМНЫЙ ЗВУК 5.1, ФИЛЬМЫ И ПРОГРАММЫ БЕЗ РЕКЛАМЫ</a></li></details>
					<details> <summary>Пакет телеканалов </summary><li><a href="#" title="link">Более 250 фильмов премьеры сразу после кинопроката</a></li></details>
					<details><summary>Целевая аудитория</summary><li><a href="#" title="link">мужчины и женщины 25-44, семьи с детьми.</a></li></details>

				</ul>
			</li>
			<li>
				<h2>Наш футбол HD</h2>
				<img src="img/block3.png" width="265px" height="142"  alt="">
				<p>Единственный телеканал, полностью посвященный Российскому футболу! Матчи Премьер Лиги российского футбольного чемпионата, матчи розыгрыша Кубка России. Смотрите и болейте за отечественный футбол!</p>
				<a href="" class="read">подробнее</a>
			</li>
		</ul>
		
		<footer>
		<ul class="top-footer">
			<li class="browse-site">
				<h3>Что вы получите с Дом.ru</h3>
				<ol>
					<li><a href="">Максимальная скорость по ночам</a></li>
					<li><a href="">84 HD канала</a></li>
					<li><a href="">Скидки до 20 %</a></li>
					<li><a href="">Мониторинг сети 24/7</a></li>
					<li><a href="">Более 9000 точек Wi-Fi</a></li>
					<li><a href="">Кастомизация</a></li>
				</ol>
			</li>
			<li class="our-test">
				<h3>Как подключиться?</h3>
				<p>Чтобы оставить заявку, выберите один из пакетов услуг понравившийся вам. Если вы не можете определиться с выбором, оставьте заявку без выбора пакета.В течение часа с вами свяжется оператор и подберет удобное время для визита техника.Он проведет кабель, оформит договор и примет оплату — это займет не более часа.</p>
				<span class="bold">perm.domru.ru</span>
			</li>
			<li class="our-blog">
				<h3>Подключить цифровое телевидение</h3>
				<p class="date">Mаксимальное количество HD канало</p>
				<p><span class="blue">Вам больше не нужно подстраиваться под телепрограмму.</span> Хотите смотреть любимые каналы когда угодно? Тогда трехдневный телеархив и сервис Дом.ru TV to Go для вас! </p>
				<p class="date">Получи выгоду до 60%!</p>
				<p> <span class="blue">Сэкономить на оплате домашнего интернета</span>, ТВ и телефона — просто! Для этого подключите пакет услуг Дом.ru и получайте выгоду до 60% ежемесячно. </p>
			</li>
		</ul> 
		<div class="botto-fotter">
			<a href="#" class="logo"></a>

			<div class="social">
				  
				<p class="text">Войти через:</p>
				 <div class="sol">
				<img class="soc" width="30px" height="30px" src="img/if_facebook_313103.png" alt="art"><a href="#"></a></img>
				<img class="soc" width="30px" height="30px" src="img/if_googleplus_313110.png" alt="art"><a href="#"></a></img>
				<img class="soc" width="30px" height="30px" src="img/if_ok_313120.png" alt="art"><a href="#"></a></img>
				<img class="soc" width="30px" height="30px" src="img/if_vkontakte_313078.png" alt="art"><a href="#"></a></img>
			</div >
			</div>
			 
			<p>© 2001—2018. Интернет-провайдер Дом.ru. АО «ЭР-Телеком Холдинг». Все права защищены.</p>
		</div>
	</footer>
	</div>
</body>
</html>