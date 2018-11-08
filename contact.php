<?php 
					require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Авторизация</title>
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
					<li><a href="index.php" title="home">ТВ + Интернет</a>
						<ul class="vpered">
							<li><a href="internet.php">Интернет</a></li>
							<li><a href="tv.php">Дом.ru&nbsp;TV</a></li>
						</ul>
					</li>
					<li><a href="services.php" title="">Акции</a></li>  
					<li><a href="portfolio.php" title="cont">Новости</a></li> 
					<li><a href="support.php" title="port">Поддержка</a></li>   
					<li><a href="about.php" title="serv">О нас</a></li>  
					<li class="curnet"><a href="contact.php" title="home">Личный кабинет</a></li>  
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
			<p>Все необходимое в личном кабинете</p>			
			<h1>Авторизация</h1>
		</div>
		<div class="main-block">
			<main>
				<?php
					 

					$data = $_POST;
					if( isset($data['do_login']) )
					{
						$errors = array();
						$user = R::findOne('users','login = ?', array($data['login']));
						if( $user )
						{
							if( password_verify($data['password'], $user->password)) {
								$_SESSION['logged_user'] = $user;
								echo '<div style="color: green; font-size: 15px; margin-top: 16px;">Вы авторизованы!<br/> Можете перейти на <a href="index.php">главную</a> страницу! </div><hr>';
							} else
							{
								$errors[] = 'Неверно введен пароль!';
							}
						} else
						{
							$errors[] = 'Пользователь с таким логином не найден!';
						}
						if( ! empty($errors) )
						{
							echo '<div style="color: red; font-size: 15px; margin-top: 16px;">'.array_shift($errors).'</div><hr>';
						}
					}
				?>
				 <form action="contact.php" method="POST">
				 	<p><label for="name"> </label></p>
				 	<input type="text" id="name" name="login" placeholder="Номер договора или эл. почта или телефон"  value="<?php echo @$data['login']; ?>">
				 	<p><label for="name"> </label></p>
				 	<input type="password" id="email" placeholder="Пароль" name="password" value="<?php echo @$data['password']; ?>">
					
					<button type="submit" name="do_login" class="read3 read4">Войти</button>
				 	<a href="registr.php" class="read1 read2">Подключиться</a>

				 </form>
				 <form action="/" class="input">
				 	<input type="checkbox" id="raz"/><label for="raz">Запомнить меня</label>
				 </form>
			</main>
			<div class="side-bar">
				<div class="sb-block">
					<h3 class="title">Офис в Перми</h3>
					 <ul>
					 	<li>Адрес: 614990 г. Пермь</li>
					 	<li>Космонавтов, 111</li>
					 	<li>корпус 43</li>
					 </ul>
					</div>
				<div class="sb-block">
					<h3 class="title">Контактная Информация</h3>
					<ul>
						<li><a href="mailto:info@domru.ru"></a> E-mail: info@domru.ru</li>
						<li>Телефон: +7 (342) 246-22-33</li>
						<li>Факс: +7 (342) 219-50-24</li>
					</ul>
				</div>
				<div class="sb-block">
					<h3 class="title">Мы всегда на связи</h3>
					<div class="sol">
				<img class="soc" width="30px" height="30px" src="img/if_facebook_313103.png" alt="art"><a href="#"></a>
				<img class="soc" width="30px" height="30px" src="img/if_googleplus_313110.png" alt="art"><a href="#"></a>
				<img class="soc" width="30px" height="30px" src="img/if_ok_313120.png" alt="art"><a href="#"></a>
				<img class="soc" width="30px" height="30px" src="img/if_vkontakte_313078.png" alt="art"><a href="#"></a>
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
</body>
</html>