<?php 
					require "db.php";
				?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Скидки и бонусы от Дом.ru в Перми</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="keywords" content="Дом.ru, объединенный, интернет, телефон, телефония, телевидение, hd, кабельное, цифровое, телевидение">
	 
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
					<li><a href="index.php" title="home">ТВ + Интернет</a>
						<ul class="vpered">
							<li><a href="internet.php">Интернет</a></li>
							<li><a href="tv.php">Дом.ru&nbsp;TV</a></li>
						</ul>
					</li>
					<li class="curnet"><a href="services.php" title="">Акции</a></li>  
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
		<div class="page-blog">
			<p>Мы лучшие в том, что мы делаем. Ознакомьтесь с нашими услугами.</p>			
			<h1>Наши услуги</h1>
		</div>
		<ul class="midle-block">
			<li>
				<h2>Мне нравится «М»</h2>
				<img src="img/Layer1.png" width="265px" height="142"  alt="">
				<p>При подключении  пользователь получает 130 каналов, при этом 29 из них будут в качестве HD.Также дополнительно будет подключённый скоростной интернет.Цена такого пакета составляет 700 рублей в месяц.</p>
				<a href="" class="read">подробнее</a>
				<a href="registr.php" class="read flright">Подключить</a>
			</li>
			<li>
				<h2>Мне нравится «L»</h2>
				<img src="img/Layer2.png" width="265px" height="142"  alt="">
				<p>Этот пакет, предоставляет пользователям 151 каналов, 40 из которых будут в качестве HD.Клиенту будет сразу проведённый и интернет, скоростью 100 Мбит/с. Цена пакета составляет 850 рублей на месяц.</p>
				<a href="" class="read">подробнее</a>
				<a href="registr.php" class="read flright">Подключить</a>
			</li>
			<li>
				<h2>Мне нравится «XXL»</h2>
				<img src="img/Layer3.png" width="265px" height="142"  alt="">
				<p>Стоимость подключения этого пакета 1230 рублей, но клиент сможет подключить 190 каналов, 65 из которых будут показывать в качестве HD. Стандартно, подключается скоростной 100 Мбит/с. интернет.</p>
				<a href="" class="read">подробнее</a>
				<a href="registr.php" class="read flright">Подключить</a>
			</li>
		</ul>
		<ul class="midle-block top-gradient">
			<li>
				<h2>Мой конструктор 2.0</h2>
				<img src="img/Layer4.png" width="265px" height="142"  alt="">
				<p>Это минимальный пакет, что позволяет подключить 33 канала, 6 из которых, будут в качестве HD.Стоимость такого пакета составляет 700 рублей на месяц. Отдельно стоит отметить, что скорость интернета будет 50 Мбит/с.</p>
				<a href="" class="read">подробнее</a>
				<a href="registr.php" class="read flright">Подключить</a>
			</li>
			<li>
				<h2>Дивная планета</h2>
				<img src="img/Layer5.png" width="265px" height="142"  alt="">
				<p>Пакет с познавательными каналами на любой вкус: про научные открытия, изобретения и космос, путешествия по России и миру, знакомство с обычаями и нравами людей в других странах и ранее неизвестными уголками нашей страны</p>
				<a href="" class="read">подробнее</a>
				<a href="registr.php" class="read flright">Подключить</a>
			</li>
			<li>
				<h2>Настоящий мужской</h2>
				<img src="img/Layer6.png" width="265px" height="142"  alt="">
				<p>Пакет каналов для мужчин и только для них. В пакете собраны каналы о самых популярных мужских интересах. Вас ждут трансляции бокса, спортивные новости, программы, посвященные оружию и военной технике.</p>
				<a href="" class="read">подробнее</a>
				<a href="registr.php" class="read flright">Подключить</a>
			</li>
		</ul>
		<div class="benefits top-gradient">
			<h2 class="title">Что вы получите с Дом.ru</h2>
			<ul class="redw">
				<li class="qw32">
					<h3>Лучше качество картинки</h3>
					<p>Цифровой сигнал обеспечивает четкую и яркую картинку даже на экранах с очень широкой диагональю.</p>
				</li>
				<li class="qw33">
					<h3>Никакой путаницы</h3>
					<p>Абонентская плата за все подключенные телевизоры будет производиться по одному договору. Это гораздо удобнее, чем платить за каждый телевизор отдельно.</p>
				</li>
				<li class="qw34">
					<h3>ТВ в каждой комнате</h3>
					<p>Если вы берете ТВ-оборудование в аренду, вы можете подключить до 5 телевизоров к одному договору. При желании подключить больше приставок, их необходимо купить.</p>
				</li>
				<li class="qw35">
					<h3>Трансляция нескольких каналов</h3>
					<p>Пропускная способность канала передачи цифрового сигнала шире, и Клиенты цифрового телевидения в Перми могут смотреть в несколько раз больше каналов, чем Клиенты аналогового.</p>
				</li>
				<li class="qw36">
					<h3>Общий доступ ко всем каналам</h3>
					<p>Все платные пакеты каналов на вашем договоре будут транслироваться на каждом подключенном телевизоре.</p>
				</li>
				<li class="qw37">
					<h3>Мобильное интернет-телевидение</h3>
					<p>С Мобильным ТВ вы можете начать просмотр на домашнем телевизоре, затем отправиться в любимое кафе и смотреть на смартфоне </p>
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