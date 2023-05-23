<?
include "nav.php";
?>

<?
    $id = $_GET['id'];

    $req = "SELECT * FROM `profession` WHERE `id` = $id";
    $result = mysqli_query($link, $req);
    $profession = mysqli_fetch_assoc($result);
?>


    <form method='POST' enctype="multipart/form-data">

        <div class="label-float">
            <input type="text" name="profession" placeholder=" "/ value='<?echo $profession['profession'] ?>'>
            <label>Специальность</label>
        </div>

        <div class="containers">
            <h3><input type="submit" class="btn1" name="ok" value="Сохранить"></h3>
        </div>
    </form>



<?
if($_POST['ok']){
    $profession = $_POST['profession'];

    $req = "UPDATE `profession` SET `profession`='$profession'";
    $req.=" WHERE `id`=$id";
    mysqli_query($link,$req) or die(mysqli_error($link));
}
?>