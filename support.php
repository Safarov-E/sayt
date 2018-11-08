<?php 
					require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сервис и поддержка: помощь в решении проблемы с интернетом, телевидением, телефоном от Дом.ru в Перми</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="keywords" content="Дом.ru, объединенный, интернет, телефон, телефония, телевидение, hd, кабельное, цифровое, телевидение">
	 
 
	 
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
					<li><a href="services.php" title="">Акции</a></li>  
					<li><a href="portfolio.php" title="cont">Новости</a></li> 
					<li class="curnet"><a href="support.php" title="port">Поддержка</a></li>   
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
			<p>С какой услугой возникла проблема?</p>			
			<h1>Техподдержка

</h1>
		</div>
		<div class="main-block"> 
			<div class="spoiler_contaier">

			<h2 class="zago">Самые популярные вопросы и ответы</h2>
    <div class="spoiler">
       <a href="" class="spoiler_links">Выходит ошибка при подключении <span class="plus_minus">+</span></a>
       <div class="spoler_body">
         <p> — Перезагрузите компьютер/ноутбук;</p>
	<p>— На 10 минут отключите питание роутера или модема, после чего аккуратно включите устройство связи в электросеть и дождитесь его полной загрузки;</p>
	<p>— Проверьте целостность сетевого кабеля и правильность его подключения к разъему сетевой карты вашего ПК;</p>
	<p>— Если компьютер/ноутбук оборудован несколькими сетевыми картами (разъемами Ethernet) – поочередно попробуйте подключиться через каждый из них;</p>
	<p>— Если помимо данного ПК у вас имеется другое устройство связи (ноутбук, смартфон и т.д.), или же на компьютере установлено несколько версий windows – проверьте подключение к интернету с другой ОС;</p>
	<p>— В «Панели управления» виндовс удалите драйвера для вашей сетевой карты и установите их последнюю версию — с диска, или скачав на ПО на официальном сайте производителя.</p>
       </div>
    </div>
    <div class="spoiler">
       <a href="" class="spoiler_links">Нет вещания на всех каналах<span class="plus_minus">+</span></a>
       <div class="spoler_body">
          <p>1. Проверьте плотность подключения кабеля.</p>

	<p>2. Проверьте целостность кабеля в квартире.</p>

	<p>3. Пересканируйте каналы.</p>

	<p>4. Если вопрос не решен, Вы можете:</p>
 
       </div>
    </div>
    <div class="spoiler">
       <a href="" class="spoiler_links">Низкая скорость<span class="plus_minus">+</span></a>
       <div class="spoler_body">
          <p>Необходимо проверить открытие страниц без активных загрузок. </p>
          <p>Для этого остановите загрузку файлов в браузере (если имеются таковые), а также отключите все программы работающие в фоном режиме, которые могут загружать файлы (типа Torrent, Shareman, Futuron)</p>
       </div>
    </div>
    <div class="spoiler">
       <a href="" class="spoiler_links">Не подключается к Wi-Fi<span class="plus_minus">+</span></a>
       <div class="spoler_body">
          <p>1. Попробуйте перезагрузить ваш роутер:</p>

	<p>—  отключите его от электросети на 5-10 секунд;</p>
	<p>—  включите его снова. Подождите 1-2 минуты и проверьте работу услуги.</p>
	<p>2. Если вопрос не решен, вы можете:</p>

	<p>—  позвонить в Техническую поддержку по телефону 8-800-333-7000 (звонок бесплатный);</p>

	<p>— обратиться к Онлайн-консультанту;</p>
       </div>
       
    </div><div class="spoiler">
       <a href="" class="spoiler_links">Отсутствует входящая и исходящая связь, нет гудка <span class="plus_minus">+</span></a>
       <div class="spoler_body">
          <p>Проверьте плотность подключения кабеля к телефонному шлюзу или комбо-устройству, наличие видимых повреждений кабеля в квартире.</p>
       </div>
       
    </div>
</div>
			<h2 class="zago1">Наши специалисты всегда на связи <br>и оперативно ответят Вам</h2>
			<main>
				  <form id="form" method="post">
				 	<input class="rowen" type="text" name="name" placeholder="Ваше имя" required /><br />
				 	<input class="rowen" type="text" name="phone" placeholder="Ваш телефон" required /><br />
				 	<input class="rowen" type="text" name="mail" placeholder="Вашa Почта" required /><br />
				 	<textarea class="rowen" type="text" name="text" id="qwe" cols="144" rows="10" placeholder="Пожалуйста, сообщите как можно больше подробностей – это поможет нам быстрее решить вопрос." style="margin: 0px; width: 391px; height: 149px;"></textarea>
		 
				 	<button class="read1">Отправить</button>
				 </form>
			</main>
			<div class="side-bar1">
				<div class="sb-block">
					<h3 class="title">Помощник по дому</h3>
					 <ul>
					 	<li>Когда дома сломался компьютер</li>
					 	<li> или требуется настройка</li>
					 	<li>программ и устройств,</li>
					 	<li>вызывайте Помощника по дому.</li>
					 	<li>Выполним работы быстро и качественно.</li>
					 	      
					 </ul>
					</div>
				<div class="sb-block">
					<h3 class="title">Для вызова Помощника звоните по телефону:</h3>
					<ul>
						<li>Телефон: +7 (342) 2-195-195</li>
					</ul>
				</div>
				<div class="sb-block">
					<h3 class="title">Сервисные центры</h3>
					<ul>
						<li class="adress__place">Сервисный центр</li>
						<li >ул. Автозаводская, 44 </li>
						<li>Пн-вс с 9:00 до 21:00</li>
						<li class="adress__place js-contacts-name">Сервисный центр</li>
						<li>ул. Уинская, 15а </li>
						<li>Пн-вс с 10:00 до 21:00</li>
						<li class="adress__place js-contacts-name">Сервисный центр</li>
						<li>пр. Парковый, 17 </li>
						<li>Пн-вс с 10:00 до 21:00</li>
					</ul>
			</div>
					
				</div>
			</div>
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
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="js/common.js"></script>
	<script src="js/com.js"></script>
</body>
</html>