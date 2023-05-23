<?
include "nav.php";
?>

<?
    $id = $_GET['id'];

    $req = "SELECT * FROM `teacher` WHERE `id` = $id";
    $result = mysqli_query($link, $req);
    $teacher = mysqli_fetch_assoc($result);
?>
<?
$req = "SELECT * FROM `profession`";
$result = mysqli_query($link,$req);
$profession = [];
while ($row = mysqli_fetch_assoc($result))
    $profession[] = $row;
?>

    <form method='POST' enctype="multipart/form-data">
        <div class="label-float">
            <input type="text" name="name" placeholder=" "/ value='<?echo $teacher['name'] ?>'>
            <label>Имя</label>
        </div>

        <div class="label-float">
            <input type="text" name="surname" placeholder=" "/ value='<?echo $teacher['surname'] ?>'>
            <label>Фамилия</label>
        </div>

        <div class="label-float">
            <input type="text" name="experience" placeholder=" "/ value='<?echo $teacher['experience'] ?>'>
            <label>Опыт</label>
        </div>

        <select name="profession">
            <?
            for ($i=0; $i < count($profession); $i++){
                echo "<option value=".$profession[$i]['profession'].">".$profession[$i]['profession']."</option>";
            }
            ?>
        </select>
        
        <p>Фотография: <input type="file" name="img" value='<?echo $teacher['img'] ?> '></p>

        <div class="containers">
            <h3><input type="submit" class="btn1" name="ok" value="Сохранить"></h3>
        </div>
    </form>



<?
if($_POST['ok']){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $profession = $_POST['profession'];
    $experience = $_POST['experience'];

    $req = "UPDATE `teacher` SET `name`='$name', `surname`='$surname',`profession`='$profession', `experience`='$experience'";
    if ($_FILES['img']['name']){
        $req.= ", `img` = '".$_FILES['img']['name']."'";
        copy($_FILES['img']['tmp_name'], '../img/'.$_FILES['img']['name']);
    }
    $req.=" WHERE `id`=$id";
    echo $req;
    mysqli_query($link,$req) or die(mysqli_error($link));

}
?>