<?
include "nav.php";
?>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<?

$id=$_GET['id']; 

$req = "SELECT * FROM `courses` WHERE `id` =". $id;

$result = mysqli_query($link, $req);
$epms = mysqli_fetch_assoc($result);

?>
<?
$req = "SELECT * FROM `exercise` WHERE `id_courses` =". $id;
$result = mysqli_query($link, $req);
$exercise = array();
while ($row = mysqli_fetch_assoc($result))
    $exercise[] = $row;

?>

<div class="full-courses">
			<?
			echo "<div class='fullcourses-cart'>
				<div class = 'fullcourses-img'><img src='../img/".$epms['img']."'></div>
				<h2>".$epms['name']."</h2>
				<p>".$epms['text']."</p>
				</div>
				";
			?>
</div>
<div class="exercise">
		<?
			for ($i = 0; $i < count($exercise); $i++){
                echo "<div class='exercise-cart'>
                <h2>".$exercise[$i]['name']."</h2>
    	        <p>".$exercise[$i]['task']."</p>
                </div>";
            }
		?>
</div>

<?
include "footer.php";
?>