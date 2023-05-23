<?
include "nav.php";
$req = "SELECT * FROM `my-courses` WHERE `id_users` =". $_COOKIE['id'];
$result = mysqli_query($link, $req);
$mycourses = [];
while ($row = mysqli_fetch_assoc($result))
    $mycourses[] = $row;
?>
<div class="title">
	<h2 align="center">Мои курсы</h2>
</div>


<?
for ($i = 0; $i < count($mycourses); $i++){
	$req = "SELECT * FROM `courses` WHERE `id` =". $mycourses[$i]['id_courses'];
	$result = mysqli_query($link, $req);
	$courses = mysqli_fetch_assoc($result);
		echo '<div class="my-courses">';
		echo "<p align='center'><img src='../img/".$courses['img']."'></p>
 			<p align='center'>".$courses['name']."</p>
     		<p>".$courses['text']."</p>
			<a href='fullcourses.php?id=".$courses['id']."'><button class='btn'>Доступ</button></a>
			</div>
     		";
}
?>

<?
include "footer.php";
?>