<?
$link = mysqli_connect('localhost', 'root', 'root', 'skillbox');
if ($_POST['ok']){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $result = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='".$login."'");
    if (mysqli_num_rows($result)>0) {
        $users = mysqli_fetch_assoc($result);
        if (password_verify($password, $users['password'])) {
            setcookie('id',$users['id'],time()+60*60*24);
            $new_url='index.php';
            header('Location: '.$new_url);
        } else {
            echo "Пароль не верный";
        }
    } else {
        echo "Логин или пароль не верный";
    }
}
?>
<?
include "nav.php";
?>






    <div class= "title">
    <h2 align="center">Авторизация</h2>
    </div>
    <form method="POST">
        <div class="label-float">
            <input type="text" name="login" placeholder=" "/>
            <label>Логин</label>
        </div>
        <div class="label-float">
            <input type="text" name="password" placeholder=" "/>
            <label>Пароль</label>
        </div>
        
        <h3><input type="submit" name="ok"></h3>
    </form>

