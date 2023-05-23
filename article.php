<?
include "nav.php";
?>
<?
$req = "SELECT * FROM `article`";
$result = mysqli_query($link, $req);
$article = array();
while ($row = mysqli_fetch_assoc($result))
    $article[] = $row;
?>
<div class="article">
<?
	for ($i = 0; $i < count($article); $i++){
    	echo "
    	<div class='article-cart'>
    	<h2>".$article[$i]['subject']."</h2>
    	<div class = 'article-img'><img src='../img/".$article[$i]['img']."'></div>
		<span>".$article[$i]['subtopic']."</span>
		<p>".$article[$i]['text']."</p>
		<h3><i class='fa fa-calendar' aria-hidden='true'>".' '.$article[$i]['data']."</i></h3>
		</div>
		";
	}
?>
</div>
<?
include "footer.php";
?>