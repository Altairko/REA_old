<?
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
include('config.php');
include('../theme/head.html');




// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{	
// Если пусты, то мы не выводим форму входа
include('../theme/flogin.html');
}
else
   {
   // Если не пусты, то мы выводим ссылку
    echo "<center><div class='alert alert-success'>
        Вы вошли на сайт, как <strong>".$_SESSION['login']."</strong><form action='logout.php' method='post'><button type='submit'   class='btn btn-xs btn-danger' name='submit' >Выход</button></form>	
      </div></center>";

include('table_user.php');
}


?> 
   
