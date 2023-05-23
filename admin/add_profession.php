<?
include "nav.php";
$req = "SELECT * FROM `profession`";
$result = mysqli_query($link,$req);
$profession = [];
while ($row = mysqli_fetch_assoc($result))
    $profession[] = $row;
?>

    <form method="POST" enctype = "multipart/form-data">

        <div class="label-float">
            <input type="text" name="profession" placeholder=" "/>
            <label>Специальность</label>
        </div>
        
        <p><input type="submit" name="ok" value="Добавить" class="btn1"></p>
    </form>


<?
if ($_POST['ok']) {

    $profession = $_POST['profession'];

    $req = "INSERT INTO `profession`(`profession`) VALUES ('$profession')";
    mysqli_query($link,$req) or die(mysqli_error($link));
}
?>