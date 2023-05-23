<?
include "nav.php";
?>
<?
$req = "SELECT * FROM `teacher`";
$result = mysqli_query($link, $req);
$teacher = array();
while ($row = mysqli_fetch_assoc($result))
    $teacher[] = $row;
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
            <input type="text" name="name" placeholder=" "/>
            <label>Имя</label>
        </div>
        <div class="label-float">
            <input type="text" name="surname" placeholder=" "/>
            <label>Фамилия</label>
        </div>
        <div class="label-float">
            <input type="text" name="experience" placeholder=" "/>
            <label>Опыт</label>
        </div>

        <p>Фотография <input type="file" name="img"></p>
        
    <div class="select">
        <select name="profession">
            <option selected disabled>Специальность</option>
            <?
            for ($i=0; $i < count($profession); $i++){
                echo "<option value=".$profession[$i]['profession'].">".$profession[$i]['profession']."</option>";
            }
            ?>
        </select>
    </div>

        
        <p><input type="submit" name="ok" value="Добавить" class="btn1"></p>
    </form>


<?
if ($_POST['ok']) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $experience = $_POST['experience'];
    $profession = $_POST['profession'];
    $img_name = $_FILES['img']['name'];

    copy($_FILES['img']['tmp_name'], '../img/'.$img_name);
    $req = "INSERT INTO `teacher`(`name`, `surname`, `profession`, `experience`, `img`) VALUES ('$name','$surname','$profession','$experience','$img_name')";
    mysqli_query($link,$req) or die(mysqli_error($link));
}
?>