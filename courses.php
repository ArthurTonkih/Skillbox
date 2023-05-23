<?
include "nav.php";
?>
<?
$req = "SELECT * FROM `courses`";
$result = mysqli_query($link, $req);
$courses = array();
while ($row = mysqli_fetch_assoc($result))
       $courses[] = $row;
$req = "SELECT * FROM `courses-speeded`";
$result = mysqli_query($link, $req);
$speeded = array();
while ($row = mysqli_fetch_assoc($result))
       $speeded[] = $row;
?>
<?
if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$req = "SELECT * FROM `courses` WHERE `name` LIKE '%$search%'";
$result = mysqli_query($link, $req);
$courses = [];
while ($row = mysqli_fetch_assoc($result))
    $courses[] = $row;
}
?>
	<div class="search-box">
		<form class="search" method="GET">
			<input type="search" name="search" placeholder="Поиск.." class="search-txt">
			<a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
		</form>
	</div>

<div class="menu">
<div class="menu1">
    <div class="menu2">
        <h2>Все курсы</h2>
		<h2>Профессии с нуля</h2>
		<p>Большие курсы по комплексу навыков.</p>
		<p>Помогают получить новую профессию.</p>
    </div>
	<?
	for ($i = 0; $i < count($courses); $i++){
    	echo "
    	<div class='courses'>
		<div class='job'><span>&nbsp&nbsp гарантия трудоустройства &nbsp&nbsp</span></div>
    	<p>".$courses[$i]['month'].' месяцев'."</p>
		<h3>".$courses[$i]['name']."</h3>
		<a href='fullProducts.php?id=".$courses[$i]['id']."' class=''>Подробнее</a>
		</div>
		";
	}
	?>

</div>
</div>

<?
include "footer.php";
?>