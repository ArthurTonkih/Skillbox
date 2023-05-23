<?
include "nav.php";
?>
<?

$req = "SELECT * FROM `teacher`";
$result = mysqli_query($link, $req);
$teacher = [];
while ($row = mysqli_fetch_assoc($result))
    $teacher[] = $row;

?>


    <h2 align="center">Таблица учителей</h2>
<div class="table-prod mtb">
    <table class="prodtable">
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Специальность</th>
            <th>Опыт работы</th>
            <th>Изображение</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        <?
            for ($i = 0; $i < count($teacher); $i++){
                echo "<tr>";
                echo "<td>".$teacher[$i]['name']."</td>
                <td>".$teacher[$i]['surname']."</td>
                <td>".$teacher[$i]['profession']."</td>
                <td>".$teacher[$i]['experience']."</td>
                <td><div class ='teacherimg'><img src='../img/".$teacher[$i]['img']."'></div></td>
                <td><a href= 'edit_teacher.php?id=".$teacher[$i]['id']."'><i class='fa fa-pencil' aria-hidden='true'></i> </a></td>
                <td><i class='fa fa-trash-o fa-fw teacher-delete' id=".$teacher[$i]['id']."></i></td>";

                echo "</tr>";
            }
        ?>
    </table>
</div>

    <a href="add_teacher.php"><button class="btn1">Добавление преподователя</button></a>

<?
include "footer.php";
?>