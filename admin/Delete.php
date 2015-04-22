<?php
session_start();
	include('../theme/head.html');	
	// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
	
// Если пусты, то мы не выводим форму входа
include('../theme/flogin.html');

}
else{
include('config.php');
$connect_to_db = mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name, $connect_to_db);
mysql_query('SET NAMES UTF8');
$query = "DELETE FROM bay_user WHERE id=".$_GET['id'];
mysql_query($query) or die("Ошибка запроса (Del):".mysql_error());
echo '<script type="text/javascript">
	
		window.location.href="index.php?page=1";
	
	</script>';
die();
}
?>	   