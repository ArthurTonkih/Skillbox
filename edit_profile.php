<?
include "nav.php";
?>

<?
$id = $_COOKIE['id'];
$req = "SELECT * FROM `users` WHERE `id` = $id";
$result = mysqli_query($link, $req);
$users = mysqli_fetch_assoc($result);
if($_POST){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $req = "UPDATE `users` SET `name`='$name', `surname`='$surname'";
    if ($_FILES['surname']['name']){
        $req = ', `surname` = '.$_FILES['surname']['name'];
        copy($_FILES['surname']['tmp_name'], 'surname'.$_FILES['surname']['name']);
    }
    $req.= " WHERE `id` = $id";
    mysqli_query($link,$req) or die(mysqli_error($link));
}
?>

    <form method='POST' enctype="multipart/form-data">
        <div class="label-float">
            <input type="text" name="name" placeholder=" "/ value='<?echo $users['name'] ?>'>
            <label>Имя</label>
        </div>
        <div class="label-float">
            <input type="text" name="surname" placeholder=" "/ value='<?echo $users['surname'] ?>'>
            <label>Фамилия</label>
        </div>
        <div class="containers">
            <h3><input type="submit" class="btn1" name="ok"></h3>
        </div>
    </form>


<?
include "footer.php";
?>