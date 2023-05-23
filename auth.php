<?
include "nav.php";
?>
<?
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






    
<div class="auth-block">
	<div class="auth">
		<div class= "title">
	        <h2 align="center">Авторизация</h2>
	    </div>

	    <form method="POST" class="auth-block">
	        <div class="label-float">
	            <input type="text" name="login" placeholder=" "/>
	            <label>Логин</label>
	        </div>
	        <div class="label-float">
	            <input type="text" name="password" placeholder=" "/>
	            <label>Пароль</label>
	        </div>
	        
	        <div class="box-form">
	        	<h3><input type="submit" name="ok" class="btn2"></h3>
	        </div>
	    </form>
	    <p>Нет аккаунта? <a href="reg.php" class="link-animate">Зарегистрироваться</a></p>
	</div>
</div>
