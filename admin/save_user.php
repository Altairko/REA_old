<?php
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
include ("config.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT user_id FROM users WHERE user_login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['user_id'])) {
exit ("<center><div class='alert alert-danger'>
        <strong>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</strong>
      </div></center>");
}

// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (user_login,user_password) VALUES('$login','$password')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "<center><div class='alert alert-success'>
        <strong>Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a></strong>
      </div></center>";
}

else {
echo "<center><div class='alert alert-danger'>
        <strong>Ошибка! Вы не зарегистрированы.</strong>
      </div></center>";

     }
?>