<?
$link = mysqli_connect('localhost', 'root', '', 'skillbox');

if ($_POST['req']=='delprofession'){
	$id=$_POST['id'];
	$req = 'DELETE FROM `profession` WHERE `id`= '.$id;
	if (mysqli_query($link, $req) or die(mysqli_error($link))){
		echo 'ok';
	}
}
?>