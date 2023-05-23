<?
include "nav.php";
?>
<?


// $profession = ($_GET['profession']) ? implode(',', $_GET['profession']) : null;
// $professionWhere = ($profession !== null) ? "`profession` in ($profession) and ": '';

// $sort = ($_GET['sort']) ? " ORDER BY ".explode('-', $_GET['sort'])[0]." ".explode('-', $_GET['sort'])[1] : '';
// $req = "SELECT * FROM `teacher` WHERE $professionWhere $sort";

$req = "SELECT * FROM `teacher`";
$result = mysqli_query($link, $req);

$teacher = [];
while ($row = mysqli_fetch_assoc($result))
    $teacher[] = $row;
?>


<h2 align="center">Наши учителя</h2>
<div class="teacher">
	<?
		for ($i = 0; $i < count($teacher); $i++){
			echo "<div class = 'card-teacher'>";
				echo "<div class='teacherimg'><img src='img/".$teacher[$i]['img']."'></div>
				 <h3>".$teacher[$i]['name']." ".$teacher[$i]['surname']."</h3>
				 <div class = 'teacher-info'><p>Профессия: ".$teacher[$i]['profession']."</p>
				 <p>Опыт работы: ".$teacher[$i]['experience']."</p></div>";
			echo "</div>";
		}
	?>
</div>
<?
include "footer.php";
?>
