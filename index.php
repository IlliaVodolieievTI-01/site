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
	<form action="vendor/signin.php" method="post">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите свой пароль">
		<button type="submit">Войти</button>
		<p>
			Нет аккаунта? <a href="register.php">Зарегистрироваться</a>
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
		