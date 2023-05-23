<?
	$link = mysqli_connect('localhost', 'root', '', 'skillbox');
?>
<!DOCTYPE html>
<html>
<head>
		<title>Skillbox</title>
		<link rel="stylesheet" type="text/css" href="../style.css?<?php echo time() ?>">
		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="nav">

	<div class="navbar">
		<div class="container">
			<a href="#" class="navbar-brand">Skypro</a>
			<div class="navbar-wrap">
				<ul class="navbar-menu">
					<li><a href="index.php">Главная</a></li>
					<li><a href="courses.php">Курсы</a></li>
					<li><a href="teacher.php">Учителя</a></li>
					<li><a href="profession.php">Специальность</a></li>
					<li><a href="article.php">Статьи</a></li>
					<li><a href="exercise.php">Задание</a></li>
					<li><a href="../courses.php">Главная</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>