<?
include "nav.php";
?>

<?
$id = $_COOKIE['id'];
$req = "SELECT * FROM `article` WHERE `id` = $id";
$result = mysqli_query($link, $req);
$article = mysqli_fetch_assoc($result);

$req = "SELECT * FROM `profession`";
$result = mysqli_query($link,$req);
$profession = [];
while ($row = mysqli_fetch_assoc($result))
    $profession[] = $row;
?>

<?
if($_POST['ok']){
    $subject = $_POST['subject'];
    $subtopic = $_POST['subtopic'];
    $text = $_POST['text'];
    $profession = $_POST['profession'];

    $req = "UPDATE `article` SET `subject`='$subject',`subtopic`='$subtopic',`text`='$text', `profession`='$profession'";
    if ($_FILES['img']['name']){
        $req = ", `img` = '".$_FILES['img']['name']."'";
        copy($_FILES['img']['tmp_name'], '../img/'.$_FILES['img']['name']);
    }
    $req.=" WHERE `id` = $id";
    mysqli_query($link,$req) or die(mysqli_error($link));

}
?>

    <form method="POST" enctype = "multipart/form-data">
        <div class="label-float">
            <input type="text" name="subject" placeholder=" "/>
            <label>Тема</label>
        </div>
        <div class="label-float">
            <input type="text" name="subtopic" placeholder=" "/>
            <label>Подтема</label>
        </div>

        <div class="label-float">
            <input type="text" name="text" placeholder=" "/>
            <label>Текст</label>
        </div>

        <select name="profession">
            <?
            for ($i=0; $i < count($profession); $i++){
                echo "<option value=".$profession[$i]['profession'].">".$profession[$i]['profession']."</option>";
            }
            ?>
        </select>

        <p>Изображение <input type="file" name="img"></p>

        
        <p><input type="submit" name="ok" value="Изменить" class="btn1"></p>
    </form>
