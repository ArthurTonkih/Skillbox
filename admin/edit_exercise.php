<?
include "nav.php";
?>

<?
    $id = $_GET['id'];

    $req = "SELECT * FROM `exercise` WHERE `id` = $id";
    $result = mysqli_query($link, $req);
    $exercise = mysqli_fetch_assoc($result);
?>

    <form method='POST' enctype="multipart/form-data">
        <div class="label-float">
            <input type="text" name="name" placeholder=" "/ value='<?echo $exercise['name'] ?>'>
            <label>Название</label>
        </div>

        <div class="label-float">
            <input type="text" name="task" placeholder=" "/ value='<?echo $exercise['task'] ?>'>
            <label>Задание</label>
        </div>

        <div class="containers">
            <h3><input type="submit" class="btn1" name="ok" value="Сохранить"></h3>
        </div>
    </form>



<?
if($_POST['ok']){
    $name = $_POST['name'];
    $task = $_POST['task'];

    $req = "UPDATE `exercise` SET `name`='$name', `task`='$task'";
    $req.=" WHERE `id`=$id";
    echo $req;
    mysqli_query($link,$req) or die(mysqli_error($link));

}
?>