<?
include "nav.php";
?>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<?

$id=$_GET['id']; 

$req = "SELECT * FROM `courses` WHERE `id` = $id";

$result = mysqli_query($link, $req);
$epms = mysqli_fetch_assoc($result);

$courses = [];
while ($row = mysqli_fetch_assoc($result))
    $courses[] = $row;
?>





<div class="fullProd">
	<div class="fullProds">
		<div class="infoProd">
			<?
				echo "<div class ='infoImg'><img src='img/".$epms['img']."'></div>";
				echo "<p>Продолжительность курса ".$epms['month']." месяцев</p>";
 				echo "<h2>Профессия ".$epms['name']."</h2>";
				echo "<p>".$epms['text']."</p>";
			?>
		</div>



		<div class="info-btn">
			<?
			if ($_COOKIE['id']) {
 				echo "<div class = 'btn-courses' id =".$epms['id']."><p>Записаться на курс<p></div>";
 			} else {
 				echo "<h4>Чтобы записаться на курс необходимо авторизоваться!</h4>";
 			}
 			?>
		</div>

	</div>
</div>


<?


echo "<div class='full-info'>";
	echo "<div class='full-info'>";
		$rating = "SELECT AVG(`stars`) AS `avg` FROM `feedback` WHERE `id_courses` = $id";
		$result = mysqli_query($link, $rating);
		$rating = mysqli_fetch_assoc($result)['avg'];

		echo round($rating,1)."<i class='fa fa-star' aria-hidden='true'></i>";
	echo "</div>";

	echo "<div class='full-info'>";
		echo "<p>Продолжительность курса ".$epms['month']." месяцев</p>";
	echo "</div>";

	echo "<div class='full-info'>";
		echo "<p>Более ".$epms['vacancies']." вакансий</p>";
	echo "</div>";

	echo "<div class='full-info'>";
		echo "<p>Зарплата ".$epms['salary']." рублей</p>";
	echo "</div>";

echo "</div>";
?>


<form method="POST" enctype = "multipart/form-data">
		<h3>Отзывы</h3>
	<ul class="star">
		<? 
		echo "<li><label><input type='radio' name='stars' value='1' class='stars'>1<i class='fa fa-star' aria-hidden='true'></i>"."</label></li>";
		echo "<li><label><input type='radio' name='stars' value='2' class='stars'>2<i class='fa fa-star' aria-hidden='true'></i>"."</label></li>";
		echo "<li><label><input type='radio' name='stars' value='3' class='stars'>3<i class='fa fa-star' aria-hidden='true'></i>"."</label></li>";
		echo "<li><label><input type='radio' name='stars' value='4' class='stars'>4<i class='fa fa-star' aria-hidden='true'></i>"."</label></li>";
		echo "<li><label><input type='radio' name='stars' value='5' class='stars'>5<i class='fa fa-star' aria-hidden='true'></i>"."</label></li>";
		?>
	</ul>
	<div class="feedback-input">
		<div class="form__group field">
		    <input type="input" class="form__field" name="name" placeholder="name" required="">
		    <label for="name" class="form__label">Имя</label>
		</div>
		<div class="form__group field">
		    <input type="input" class="form__field" name="feedback" placeholder="feedback" required="">
		    <label for="name" class="form__label">Отзыв</label>
		</div>
	</div>
	<p><input type="submit" name="ok" value="Добавить" class="btn3"></p>
</form>

<?
if ($_POST['ok']) {
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
	$stars = $_POST['stars'];
    $req = "INSERT INTO `feedback`(`id_courses`, `name`, `feedback`, `stars`) VALUES ($id,'$name','$feedback', $stars)";
    mysqli_query($link,$req) or die(mysqli_error($link));
    header("Location: fullProducts.php?id=$id");

}


	$req = "SELECT * FROM `feedback` WHERE `id_courses` = $id";
	$result = mysqli_query($link, $req);

	$feedback = [];
	while ($row = mysqli_fetch_assoc($result))
    	$feedback[] = $row
?>
<div class="feedback">
<?
 	for ($i = 0; $i < count($feedback); $i++){
			echo "
			<div class = 'feedback-cart'>
			<h3>".$feedback[$i]['name']."</h3>
			<h5>".$feedback[$i]['feedback']."</h5>
			<p>".$feedback[$i]['stars']."<i class='fa fa-star' aria-hidden='true'></i>"."</p>
			</div>
			";

	 	}
?>
</div>

<?
include "footer.php";
?>

<script type="text/javascript" src="admin/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js.js?<?php echo time() ?>"></script>