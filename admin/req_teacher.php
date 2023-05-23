<?
$link = mysqli_connect('localhost', 'root', '', 'skillbox');

if ($_POST['req']=='delteacher'){
	$id=$_POST['id'];
	$req = 'DELETE FROM `teacher` WHERE `id`= '.$id;
	if (mysqli_query($link, $req) or die(mysqli_error($link))){
		echo 'ok';
	}
}
?>