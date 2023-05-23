<?
include "nav.php";
?>
<?

$req = "SELECT * FROM `courses`";
$result = mysqli_query($link, $req);
$courses = [];
while ($row = mysqli_fetch_assoc($result))
    $courses[] = $row;

?>


    <h2 align="center">Таблица курсов</h2>
<div class="table-prod mtb">
    <table class="prodtable">
        <tr>
            <th>Продолжительность</th>
            <th>Название</th>
            <th>Информация</th>
            <th>Вакансии</th>
            <th>Зарплата</th>
            <th></th>
            <th>Изображение</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        <?
            for ($i = 0; $i < count($courses); $i++){
                echo "<tr>";
                echo "<td>".$courses[$i]['month']."</td>
                <td>".$courses[$i]['name']."</td>
                <td>".$courses[$i]['text']."</td>
                <td>".$courses[$i]['vacancies']."</td>
                <td>".$courses[$i]['salary']."</td>
                <td>".$courses[$i]['img']."</td>
                <div class = 'img'><td><img src='../img/".$courses[$i]['img']."'></td></div>
                <td><a href= 'edit_courses.php?id=".$courses[$i]['id']."'><i class='fa fa-pencil' aria-hidden='true'></i> </a></td>
                <td><i class='fa fa-trash-o fa-fw gds-delete' id=".$courses[$i]['id']."></i></td>";

                echo "</tr>";
            }
        ?>
    </table>
</div>
<a href="add_courses.php"><button class="btn1">Добавление товара</button></a>

<?
include "footer.php";
?>