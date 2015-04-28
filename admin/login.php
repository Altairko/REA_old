<?php
	
session_start();// вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
include('../theme/head.html');
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("<center><div class='alert alert-danger'>
        <strong>Вы ввели не всю информацию, венитесь назад и заполните все поля!</strong>
      </div></center>");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);


// подключаемся к базе
include ("config.php");

mysql_query('SET NAMES UTF8');
$result = mysql_query("SELECT * FROM users WHERE user_login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);
if (empty($myrow['user_password']))
{
//если пользователя с введенным логином не существует
exit ("<center><div class='alert alert-danger'>
        <strong>Извините, введённый вами логин или пароль неверный.</strong>
      </div></center>");
}
else {
//если существует, то сверяем пароли
          if ($myrow['user_password']==$password) {
          //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
          $_SESSION['login']=$myrow['user_login']; 
          $_SESSION['id']=$myrow['user_id'];
          $_SESSION['usern']=$myrow['user_name'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
          echo "<center><div class='alert alert-success'>
        <strong>Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a></strong>
      </div></center>";
      echo '<script type="text/javascript">window.location.href="index.php?page=1";</script>';
          }

       else {
       //если пароли не сошлись
       exit ("<center><div class='alert alert-danger'>
        <strong>Извините, введённый вами логин или пароль неверный.</strong>
      </div></center>");
	   }
}

?>

