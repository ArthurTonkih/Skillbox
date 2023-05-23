<?
include "nav.php";
?>
<?

$req = "SELECT * FROM `exercise`";
$result = mysqli_query($link, $req);
$exercise = [];
while ($row = mysqli_fetch_assoc($result))
    $exercise[] = $row;

?>


    <h2 align="center">Таблица Заданий</h2>
<div class="table-prod mtb">
    <table class="prodtable">
        <tr>
            <th>Курс</th>
            <th>Название</th>
            <th>Задание</th>
            <th>Дата</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        <?
            for ($i = 0; $i < count($exercise); $i++){
                echo "<tr>";
                echo "<td>".$exercise[$i]['id_courses']."</td>
                <td>".$exercise[$i]['name']."</td>
                <td>".$exercise[$i]['task']."</td>
                <td>".$exercise[$i]['data']."</td>
                <td><a href= 'edit_exercise.php?id=".$exercise[$i]['id']."'><i class='fa fa-pencil' aria-hidden='true'></i> </a></td>
                <td><i class='fa fa-trash-o fa-fw exercise-delete' id=".$exercise[$i]['id']."></i></td>";

                echo "</tr>";
            }
        ?>
    </table>
</div>
<a href="add_exercise.php"><button class="btn1">Добавление задания</button></a>

<?
include "footer.php";
?>