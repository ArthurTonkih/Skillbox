<?

if (isset($_GET['logout'])) {
	setcookie('id','');
	header("Location: /");
}

	$link = mysqli_connect('localhost', 'root', 'root', 'skillbox');
	// if (@$_COOKIE['id']){
	// 	$query = "SELECT COUNT(`idProduct`) as `count` FROM `cart` WHERE `id_users` = ".$_COOKIE['id'];
	// 	$res = mysqli_query($link, $query);
	// 	$count = mysqli_fetch_assoc($res)['count'];
	// } else {
	// 	$count = 0;
	// }
?>
<!DOCTYPE html>
<html>
<head>
		<title>Skillbox</title>
		<link rel="stylesheet" type="text/css" href="style.css?<?php echo time() ?>">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="header">
	<div class="social">
		<? if (!@$_COOKIE['id']) {
			echo "<a href='reg.php'>Регистрация</a>
			<a href='auth.php'>Вход</a>";
		} else {
			echo "<a href='?logout=1'>Выйти</a>";
		}
		?>
		<a href="admin/index.php">Вход в админ панель</a>
	</div>
</div>
	
	<div class="navbar">
		<div class="container">
			<a href="#" class="navbar-brand">Skillbox</a>
			<div class="navbar-wrap">
			<ul class="navbar-menu">
				<li><a href="courses.php">Курсы</a></li>
				<li><a href="#">Учителя</a></li>
				<li><a href="#">О нас</a></li>
				<li><a href="#">Мои курсы</a></li>
			</ul>
		</div>
	</div>
		<hr>
</div>