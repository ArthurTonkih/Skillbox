<?
include "nav.php";
?>
<?

$req = "SELECT * FROM `profession`";
$result = mysqli_query($link, $req);
$profession = [];
while ($row = mysqli_fetch_assoc($result))
    $profession[] = $row;

?>


    <h2 align="center">Таблица Специальностей</h2>
<div class="table-prod mtb">
    <table class="prodtable">
        <tr>
            <th>ID</th>
            <th>Специальность</th>
            <th>Изменение</th>
            <th>Удаление</th>

        </tr>
        <?
            for ($i = 0; $i < count($profession); $i++){
                echo "<tr>";
                echo "<td>".$profession[$i]['id']."</td>
                <td>".$profession[$i]['profession']."</td>

                <td><a href= 'edit_profession.php?id=".$profession[$i]['id']."'><i class='fa fa-pencil' aria-hidden='true'></i> </a></td>
                <td><i class='fa fa-trash-o fa-fw profession-delete' id=".$profession[$i]['id']."></i></td>";

                echo "</tr>";
            }
        ?>
    </table>
</div>
<a href="add_profession.php"><button class="btn1">Добавление Специальности</button></a>

<?
include "footer.php";
?>