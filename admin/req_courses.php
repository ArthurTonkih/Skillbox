<?
$link = mysqli_connect('localhost', 'root', '', 'skillbox');

if ($_POST['req']=='delcourses'){
	$id=$_POST['id'];
	$req = 'DELETE FROM `courses` WHERE `id`= '.$id;
	if (mysqli_query($link, $req) or die(mysqli_error($link))){
		echo 'ok';
	}
}
?>