<?
include "nav.php";
?>
<?
$req = "SELECT * FROM `article`";
$result = mysqli_query($link, $req);
$article = [];
while ($row = mysqli_fetch_assoc($result))
    $article[] = $row;

?>


    <h2 align="center">Таблица Статей</h2>
<div class="table-prod mtb">
    <table class="prodtable">
        <tr>
            <th>Тема</th>
            <th>Подтема</th>
            <th>Статья</th>
            <th>Специальность</th>
            <th>Дата</th>
            <th>Изображение</th>
            <th>Изменение</th>
            <th>Удаление</th>
        </tr>
        <?
            for ($i = 0; $i < count($article); $i++){
                echo "<tr>";
                echo "<td>".$article[$i]['subject']."</td>
                <td>".$article[$i]['subtopic']."</td>
                <td>".$article[$i]['text']."</td>
                <td>".$article[$i]['profession']."</td>
                <td>".$article[$i]['data']."</td>
                <div class = 'img'><td><img src='../img/".$article[$i]['img']."'></td></div>

                <td><a href= 'edit_article.php?id=".$article[$i]['id']."'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>
                <td><i class='fa fa-trash-o fa-fw article-delete' id=".$article[$i]['id']."></i></td>";

                echo "</tr>";
            }
        ?>
    </table>
</div>
<a href="add_article.php"><button class="btn1">Добавление Статьи</button></a>

<?
include "footer.php";
?>