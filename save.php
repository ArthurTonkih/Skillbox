<? 
if ($_POST['id_courses']) {
	$id_courses = $_POST['id_courses'];
	$id_users = $_COOKIE['id'];
	$req = "INSERT INTO `my-courses`(`id_courses`, `id_users`) VALUES ('$id_courses','$id_users')";
	mysqli_query($link, $req) or die(mysqli_error($link));
	echo ('ok');
}
?>