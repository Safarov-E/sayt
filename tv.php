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
		
		<ul class="midle-block1">
			<h2 class="rewyt">Видеотека Дом.ru</h2>
			<li>
				<h3 class="inter">«TV 1000 play»</h3>
				<img src="img/tv-videoteka-item-1.png" width="265px" height="142"  alt="">
				<p class="ew43r4">299 ₽/мес</p>
				<p class="ew43r5">Свежие голливудские премьеры, зарубежные блокбастеры и российские новинки – мы собрали только лучшее для вас!</p>
				<a href="" class="read">Подключить</a>
			</li>
			<li>
				<h3 class="inter">«Амедиатека»</h3>
				<img src="img/in2.jpg" width="265px" height="142"  alt="">
				<p class="ew43r4">349 ₽/мес</p>
				<p class="ew43r5">Лучшие сериалы планеты от ведущих мировых студий в любое время. Премьеры новых серий одновременно со всем миром.</p>
				<a href="" class="read">Подключить</a>
			</li>
			<li>
				<h3 class="inter">«Детская подписка»</h3>
				<img src="img/in3.jpg" width="265px" height="142"  alt="">
				<p class="ew43r4">179 ₽/мес</p>
				<p class="ew43r5">Подборка отличных мультфильмов, которая перенесет вас и ваших детей в мир, полный приключений </p> 
				<a href="" class="read">Подключить</a>
			</li>
		</ul>
		<div class="benefits1 top-gradient1">
			<h2 class="rewyt">Мобильное ТВ</h2>
			<ul class="redw1">
				<li class="qw61">
					<h3>Любые устройства</h3>
					<p>Вы можете начать смотреть фильм или трансляцию спортивного матча на смартфоне, а продолжить — на телевизоре.</p>
				</li>
				<li class="qw62">
					<h3>Быстрое переключение</h3>
					<p>Свободно меняйте одно устройство на другое, перемещаясь по квартире и за ее пределами.</p>
				</li>
				<li class="qw63">
					<h3>Бесплатный доступ</h3>
					<p>Просмотр на смaртфонах и планшетах на базе iOS и Android за 0 ₽/мес для первых 2 устройств.</p>
				</li>
				<li class="qw64">
					<h3>ТВ-Гид: больше, чем телепрограмма</h3>
					<p>Смотрите телепрограмму прямо на экране телевизора, знакомьтесь с описанием сериала или фильма.</p>
				</li>
				<li class="qw65">
					<h3>Родительский контроль</h3>
					<p>Ограничьте вашего ребенка от нежелательной информации.</p>
				</li>
				<li class="qw66">
					<h3>Цены вашего тарифа</h3>
					<p>Стоимость аренды приставок по стоимости вашего тарифного плана</p>
				</li>
			</ul>
		</div>
		<div class="benefits top-gradient">
			<h2 class="title">Пользуйтесь бесплатными бонусами от Дом.ru</h2>
			<ul class="redw">
				<li class="qw51">
					<h3>Скрытая прокладка кабеля</h3>
					<p>Кабель будет спрятан в стенах или плинтусах, и не повлияет на эстетику интерьера.</p>
				</li>
				<li class="qw52">
					<h3>Сохранение ремонта</h3>
					<p>Техник аккуратно проложит кабель без повреждения ремонта в квартире.</p>
				</li>
				<li class="qw53">
					<h3>Гибкость во времени</h3>
					<p>Вы сами выбираете дату и время подключения.</p>
				</li>
				<li class="qw54">
					<h3>Кабель высокого качества</h3>
					<p>Кабель с пропускной способностью до 300 Мбит/с и длительным сроком службы.</p>
				</li>
				<li class="qw55">
					<h3>1500 ₽</h3>
					<p>Сэкономить на оплате домашнего интернета, ТВ и телефона — просто! </p>
				</li>
			</ul>
		</div>
		
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