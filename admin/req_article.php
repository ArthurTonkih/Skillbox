<?
$link = mysqli_connect('localhost', 'root', '', 'skillbox');

if ($_POST['req']=='delarticle'){
	$id=$_POST['id'];
	$req = 'DELETE FROM `article` WHERE `id`= '.$id;
	if (mysqli_query($link, $req) or die(mysqli_error($link))){
		echo 'ok';
	}
}
?>