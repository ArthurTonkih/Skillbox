<?

if (isset($_GET['logout'])) {
	setcookie('id','');
	header("Location: /");
}

	$link = mysqli_connect('localhost', 'root', '', 'skillbox');

	if (@$_COOKIE['id']){
		$query = "SELECT COUNT(`id_courses`) as `count` FROM `my-courses` WHERE `id_users` = ".$_COOKIE['id'];
		$res = mysqli_query($link, $query);
		$count = mysqli_fetch_assoc($res)['count'];
	} else {
		$count = 0;
	}
?>
<!DOCTYPE html>
<html>
<head>
		<title>Skillbox</title>
		<link rel="stylesheet" type="text/css" href="style.css?<?php echo time() ?>">
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="nav">
	<div class="header">
		<div class="social">
			<? if (!@$_COOKIE['id']) {
				echo "<a href='auth.php'>Вход</a>";
			} else {
				echo "<a href='?logout=1'>Выйти</a>";
			}
			?>
			<a href="admin/index.php">Вход в админ панель</a>
		</div>
	</div>
	
	<div class="navbar">
		<div class="container">
			<a href="#" class="navbar-brand">Skypro</a>
			<div class="navbar-wrap">
				<ul class="navbar-menu">
					<li><a href="index.php">Курсы</a></li>
					<li><a href="article.php">Статьи</a></li>
					<li><a href="teacher.php">Наши учителя</a></li>
					<li>
						<a href="mycourses.php"><div class="number-courses"><? echo $count?></div>Мои курсы</a>	
					</li>
					<li><a href="profile.php">Профиль</a></li>
				</ul>
					

			</div>
		</div>
	</div>
</div>