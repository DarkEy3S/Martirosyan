<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/toDoList.css">
	<title>Мартиросян Севак</title>
	<link rel="shortcut icon" href="img/faviconsvg.svg" type="image/x-icon">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div id="header" class="header__fixed">
				<div class="container">
					<div class="header__body">
						<h1 class="header__left">Форма регистрации</h1>
						<?php if ($_COOKIE['user'] == '') : ?>
							<a href="#popup" class="popup-link header__right">Регеистрация</a>

						<?php else : ?>
							<a href="/validation-form/exit.php" class=" header__right">Выход</a>

						<?php endif; ?>
					</div>
				</div>
			</div>

		</header>
		<div id="popup" class="join-regist popup">
			<div class="popup__body">
				<div class="popup__content">
					<a href="#header" class="popup__close close-popup">
						X
					</a>
					<div class="regist join-regist__regist">
						<div class="regist__title">
							Форма регистрации
						</div>
						<form class="regist__form form" action="validation-form/check.php" method="post">
							<input required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" title="" type="email" name="email" class="  regist__item form__control" id="email" placeholder="Введите email">
							<input required pattern="[A-Za-z]{5,}" title="5 символов минимум и ввод только латинских букв" type="text" name=" login " class=" regist__item form__control" id="login" placeholder="Введите логин">
							<input required pattern=".{5,}" title="5 символов минимум" id="password" name="password" type="password" class="   regist__item form__control" placeholder="Пароль">
							<input required pattern=".{5,}" title="5 символов минимум" id="password-check" name="password-check" type="password" class=" password -check regist__item form__control" placeholder="Подтверждение пароля" title="">
							<button type="submit" id="submit-1" class="regist__button regist__button-success button">Зарегистрировать</button>
						</form>
						<a href="#popup__2" class="popup-link button__login  regist__button regist__button-link button">Авторизоваться</a>
					</div>
				</div>
			</div>
		</div>
		<div id="popup__2" class="join-regist popup">
			<div class="popup__body">
				<div class="popup__content">
					<a href="#header" class="popup__close close-popup">
						X
					</a>
					<div class="login join-regist__login">
						<div class="login__title">
							Форма авторизации
						</div>
						<form class="login__form form" action="validation-form/aute.php" method="post">

							<input type="text" pattern="[A-Za-z]{5,}" title=" 5 символов минимум и ввод только латинских букв" required name="login" class="  regist__item form__control" id="login" placeholder="Введите логин">
							<input required pattern=".{5,}" title="5" type="password" name="password" class="  regist__item form__control" id="password-1" placeholder="Введите пароль">
							<button type="submit" id="submit-1" class="regist__button regist__button-success button">Авторизоваться</button>

						</form>
						<a href="#popup" class="popup-link regist__button regist__button-link button">Зарегистрировать</a>
					</div>
				</div>
			</div>
		</div>
		<main class="main">
			<div class="container">
				<div class="main__content content">
					<div class="content__text">

						<?php if ($_COOKIE['user'] == '') : ?>
							Вам необходимо зарегистрироваться чтобы увидеть здесь информацию
						<?php else : ?>

							<div class=" user">
								id пользователья
								<div class="user-id"><?php print $_COOKIE['user']; ?></div>
							</div>
							<div class="in">
								<div class="container">
									<div class="in__text">
										Введите
									</div>
									<input type="text" class="filter  in__input">
									<button class="in__button">нажать</button>
								</div>
								<div class="ait">
									<p class="ait__out"></p>
								</div>
							</div>
							<hr>
							<div class="ea">
								<p class="ea__out"></p>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</main>
	</div>
</body>


<script src="js/popup.js"></script>
<script src="js/script.js"></script>
<script src="js/todo.js"></script>


</body>


</html>