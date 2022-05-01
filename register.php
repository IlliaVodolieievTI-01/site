<?php
	session_start();
?>

<doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<form action="vendor/signup.php" method="post">
		<label>ФИО</label>
		<input type="text" name="full_name" placeholder="Введите свое ФИО">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Ваша почта</label>
		<input type="email" name="email" placeholder="Введите свою почту">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите свой пароль">
		<label>Повторите пароль</label>
		<input type="password" name="password_confirm" placeholder="Повторите свой пароль">
		<button type="submit">Зарегистрироваться</button>
		<p>
			Уже есть аккаунт? <a href="index.php">Войти</a>
		</p>
		<?php
			if(isset($_SESSION['message'])){
				echo '<p class="message">' . $_SESSION['message'] . '</p>';
			}
			unset($_SESSION['message']);
		?>
	</form>

</body>
</html>