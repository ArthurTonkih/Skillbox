<?
$link = mysqli_connect('localhost', 'root', '', 'skillbox');

if ($_POST['req']=='delexercise'){
	$id=$_POST['id'];
	$req = 'DELETE FROM `exercise` WHERE `id`= '.$id;
	if (mysqli_query($link, $req) or die(mysqli_error($link))){
		echo 'ok';
	}
}
?>