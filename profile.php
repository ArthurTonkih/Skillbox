<?
include "nav.php";
?>

<link rel="stylesheet" type="text/css" href="style.css">

<?
$id = $_COOKIE['id'];
$req = "SELECT * FROM `users` WHERE `id` = $id";
$result = mysqli_query($link, $req);
$users = [];
while ($row = mysqli_fetch_assoc($result))
    $users[] = $row;
?>

<div class="title">
	<h2 align='center'>Профиль</h2>
</div>

<?
for ($i = 0; $i < count($users); $i++){
	if ($_COOKIE['id']) {
		echo "<div class='profile'>";
		echo "
		<span>Ваше имя: </span><spen>".$users[$i]['name']."</spen>
    	<p>Ваша фамилия: ".$users[$i]['surname']."</p>";
		echo "<a href='edit_profile.php?id=".$users[$i]['id']."' class='btn1'>Контактные данные</a></div>
		";
	} else {
		echo "<h4>Необходимо авторизоваться!</h4>";
	}
}
?>

<?
include "footer.php";
?>