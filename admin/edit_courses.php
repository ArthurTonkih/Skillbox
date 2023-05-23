<?
include "nav.php";
?>

<?
    $id = $_GET['id'];

    $req = "SELECT * FROM `courses` WHERE `id` = $id";
    $result = mysqli_query($link, $req);
    $courses = mysqli_fetch_assoc($result);
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
            <input type="text" name="month" placeholder=" "/ value='<?echo $courses['month'] ?>'>
            <label>Месяц</label>
        </div>

        <div class="label-float">
            <input type="text" name="name" placeholder=" "/ value='<?echo $courses['name'] ?>'>
            <label>Название</label>
        </div>

        <div class="label-float">
            <input type="text" name="text" placeholder=" "/ value='<?echo $courses['text'] ?>'>
            <label>Информация</label>
        </div>

        <div class="label-float">
            <input type="text" name="vacancies" placeholder=" "/ value='<?echo $courses['vacancies'] ?>'>
            <label>Вакансии</label>
        </div>

        <div class="label-float">
            <input type="text" name="salary" placeholder=" "/ value='<?echo $courses['salary'] ?>'>
            <label>Зарплата</label>
        </div>

        <p>Выберите картинку товара: <input type="file" name="img" value='<?echo $courses['img'] ?> '></p>

        <div class="containers">
            <h3><input type="submit" class="btn1" name="ok" value="Сохранить"></h3>
        </div>
    </form>



<?
if($_POST['ok']){
    $month = $_POST['month'];
    $name = $_POST['name'];
    $text = $_POST['text'];
    $vacancies = $_POST['vacancies'];
    $salary = $_POST['salary'];

    $req = "UPDATE `courses` SET `month`=$month, `name`='$name',`text`='$text', `vacancies`='$vacancies', `salary`='$salary'";
    if ($_FILES['img']['name']){
        $req.= ", `img` = '".$_FILES['img']['name']."'";
        copy($_FILES['img']['tmp_name'], '../img/'.$_FILES['img']['name']);
    }
    $req.=" WHERE `id`=$id";
    echo $req;
    mysqli_query($link,$req) or die(mysqli_error($link));

}
?>