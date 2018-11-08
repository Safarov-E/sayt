<?php 
					require "db.php";
				?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Все новости от провайдера домашнего интернета, телевидения и телефона Дом.ru в Перми</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="keywords" content="Дом.ru, объединенный, интернет, телефон, телефония, телевидение, hd, кабельное, цифровое, телевидение">
	 
	 <script src="js/script.js" defer></script>
	 <script src="js/script1.js" defer></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="wrapper portfolio">
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
					<li><a href="services.php" title="">Акции</a></li>  
					<li class="curnet"><a href="portfolio.php" title="cont">Новости</a></li> 
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
			<ul>
				<li><a href="#" class="currnet">Тарифы</a></li>
				<li><a href="#">Интернет</a></li>
				<li><a href="#">Конкурсы</a></li>
				<li><a href="#">Кинопремьеры</a></li>
				<li><a href="#">Телевидение</a></li>
			</ul>			
			<h1>Hовости от Дом.ru</h1>
		</div>
		<ul class="midle-block">
			<li>
				<img src="img/p3.jpg" width="265px" height="142"  alt="">
				<h4>Изменение стоимости антивируса</h4>
				 <p>Информируем, что с 1 февраля 2018 года стоимость антивируса Dr.Web Классик изменится с 69 руб/мес до 79 руб/мес.  </p>
			</li>
			<li>
				<img src="img/p1.jpg" width="265px" height="142"  alt="">
				<h4>Изменение стоимости услуг Дом.ru</h4>
				 <p>Информируем вас о том, что с 1 апреля 2018 г. изменится стоимость услуг. Подробная информация об изменениях <a href="">здесь.</a></p>
			</li>
			<li>
				<img src="img/p2.jpg" width="265px" height="142"  alt="">
				<h4>Bесенняя распродажа – всё по 100 руб.</h4>
				 <p>С 26 апреля по 8 мая каждый Клиент Дом.ru сможет попробовать продукты Дом.ru всего за 100 руб. в месяц. </p>
			</li>
			<li>
				<img src="img/p4.jpg" width="265px" height="142"  alt="">
				<h4>Изменения в тарифных планов</h4>
				 <p>Уважаемые Клиенты! С 1 апреля 2018 года произойдут изменения в наименовании тарифных планов. Ознакомиться с новыми тарифов можно <a href="">здесь.</a></p>
			</li>
			<li>
				<img src="img/p5.jpg" width="265px" height="142"  alt="">
				<h4>Участвуйте в акции и получите новый пакет каналов в подарок</h4>
				 <p>Приглашаем вас принять участие в праздничной акции «8 марта на Дом.ru Гид»! </a></p>
			</li>
			<li>
				<img src="img/p7.jpg" width="265px" height="142"  alt="">
				<h4>Изменение стоимости международных звонков</h4>
				 <p>В связи с повышением тарифов оператором связи МТТ, с 2018 г. произойдет изменение стоимости международных телефонных соединений через «8».</a></p>
			</li>
			<li>
				<img src="img/p6.jpg" width="265px" height="142"  alt="">
				<h4>Внимание! Планово-профилактические работы</h4>
				 <p>18 апреля c 00:00 до 14:00 по московскому времени пройдут планово-профилактические работы. </p>
			</li>
			<li>
				<img src="img/p8.jpg" width="265px" height="142"  alt="">
				<h4>Дом.ru запустил систему проактивного сервиса</h4>
				 <p>Решение позволяет в онлайн-режиме находить Клиентов, которые испытывают трудности с предоставлением услуг из-за неисправности на узле сети<a href="">здесь.</a></p>
			</li>
			<li>
				<img src="img/p9.jpg" width="265px" height="142"  alt="">
				<h4>Истории Победы 2018</h4>
				 <p>Победа в Великой Отечественной войне — это миллионы личных и семейных историй. Расскажите о своём герое в ТВ-летописи «Истории Победы». </a></p>
			</li>
		</ul>
		<ul class="pagination top-gradient">
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li><a href="">4....</a></li>
			<li><a href="">Next ></a></li>
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