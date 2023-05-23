<?
include "nav.php";
?>
<?

$req = "SELECT * FROM `article`";
$result = mysqli_query($link, $req);
$article = array();
while ($row = mysqli_fetch_assoc($result))
    $article[] = $row;
?>
<?
$req = "SELECT * FROM `profession`";
$result = mysqli_query($link,$req);
$profession = [];
while ($row = mysqli_fetch_assoc($result))
    $profession[] = $row;
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
        <div class="select">
            <select name="profession">
                <?
                for ($i=0; $i < count($profession); $i++){
                    echo "<option value=".$profession[$i]['profession'].">".$profession[$i]['profession']."</option>";
                }
                ?>
            </select>
        </div>

        <p>Изображение <input type="file" name="img"></p>

        
        <p><input type="submit" name="ok" value="Добавить" class="btn1"></p>
    </form>


<?
if ($_POST['ok']) {
    $subject = $_POST['subject'];
    $subtopic = $_POST['subtopic'];
    $text = $_POST['text'];
    $profession = $_POST['profession'];
    $data = date('d.m.Y');

    $img_name = $_FILES['img']['name'];
    copy($_FILES['img']['tmp_name'], '../img/'.$img_name);
    $req = "INSERT INTO `article`(`subject`, `subtopic`, `text`, `profession`, `data`, `img`) VALUES ('$subject','$subtopic','$text','$profession','$data','$img_name')";
    mysqli_query($link,$req) or die(mysqli_error($link));
}
?>