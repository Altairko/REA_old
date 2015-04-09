<?
// Страница регистрации нового пользователя
include('config.php');
include('head.html');
//$db=mysqli_connect("localhost", "root", "DnS357203", "rea");
if(isset($_POST['submit']))
{
    $err = array();

    # проверям логин
      if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    # проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($db, "SELECT COUNT(user_id) FROM users WHERE user_login='" .$_POST['login']."'");
       if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    # Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $login = $_POST['login'];

        # Убераем лишние пробелы и делаем двойное шифрование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($db,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        echo("<div align='center' class='alert alert-success'>
        <strong>Регистрация прошла успешно</strong>
      </div>      
        ");
        header('Location: /',true, 307);
         exit();
    }
    else
    {        
	    foreach($err AS $error)
        {
            echo "<div align='center' class='alert alert-danger'><strong>При регистрации произошли следующие ошибки:</strong>".$error."</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
	<body>
		   <div class="container">

      <div class="starter-template">
         <form class="form-signin" role="form" method="POST">
        <h3 class="form-signin-heading">Зарегистрируйтесь</h3>
        <input name="login" type="text" class="form-control" placeholder="ID" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Пароль" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Запомнить
        </label>
       <button name="submit" class="btn btn-lg btn-success" type="submit">Зарегистрироваться</button>
      </form>
      </div>

    </div><!-- /.container -->
	</body>
</html>