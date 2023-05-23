<?
include "nav.php";
?>
<?

$req = "SELECT * FROM `exercise`";
$result = mysqli_query($link, $req);
$exercise = array();
while ($row = mysqli_fetch_assoc($result))
    $exercise[] = $row;

$req = "SELECT * FROM `courses`";
$result = mysqli_query($link, $req);
$courses = array();
while ($row = mysqli_fetch_assoc($result))
    $courses[] = $row;
?>

    <form method="POST" enctype = "multipart/form-data">

        <div class="label-float">
            <input type="text" name="name" placeholder=" "/>
            <label>Название</label>
        </div>
        <div class="label-float">
            <input type="text" name="task" placeholder=" "/>
            <label>Задание</label>
        </div>

        <div class="select">
            <select name="id_courses">
                <option selected disabled>Курс</option>
                <?
                for ($i=0; $i < count($courses); $i++){
                    echo "<option value=".$courses[$i]['id'].">".$courses[$i]['name']."</option>";
                }
                ?>
            </select>
        </div>
        
        <p><input type="submit" name="ok" value="Добавить" class="btn1"></p>
    </form>


<?
if ($_POST['ok']) {
    $name = $_POST['name'];
    $task = $_POST['task'];
    $id_courses = $_POST['id_courses'];
    $data = date('d.m.Y');

    $req = "INSERT INTO `exercise`(`id_courses`, `name`, `task`, `data`) VALUES ($id_courses,'$name','$task','$data')";
    mysqli_query($link,$req) or die(mysqli_error($link));
}
?>

<?
include "footer.php";
?>