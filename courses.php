<?
include "nav.php";
?>

<div class="menu">
    <div class="name-menu">
        <h2>Программы обучения</h2>
    </div>
    <div class="direction">
    <?
	$req = "SELECT * FROM `categories`";
	$result = mysqli_query($link, $req);
	$categories = array();
	while ($row = mysqli_fetch_assoc($result))
   		$categories[] = $row;
	for ($i=0; $i < count($categories); $i++) {
		echo "<li><label><input type='radio' name='categories' value='.$categories[$i]['id'].'>".$categories[$i]['categories']."</label></li>";
	}
	?>
    </div>
</div>