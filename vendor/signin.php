<?php
	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$password = $_POST['password'];

	$check_user = mysqli_query($connect, "SELECT * FROM `signin` WHERE login='$login' AND password='$password'");
	if(mysqli_num_rows($check_user) > 0){
		header('Location: ../html/mainpage.html');
	}
	else{
		$_SESSION['message'] = 'Пользователь не найден!';
		header('Location: ../index.php');
	}