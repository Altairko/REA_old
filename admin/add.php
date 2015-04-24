<?php
session_start();
include('../theme/head.html');

//var_dump(($_POST['name']=='')or($_POST['price']=='') or ($_FILES['photo']['name'])or($_POST['opis']==''));
if (($_POST['name']=='')or($_POST['price']=='') or ($_FILES['photo']['name']=='')or($_POST['opis']==''))
{
echo '<br><br><br><br><br><br><br>';
echo '<table align="center">';
echo '<caption>Сообщение</caption>';
echo '<tr width="40%">';
echo '<td align="center">Будьте внимательны!</td>';
echo '</tr>';
echo '<tr>';
echo '<td align="center">Все поля должны быть заполнены!</td>';
echo '</tr>';
echo '<tfoot>';
echo '<td><button type="button" onClick="history.back();")>Назад</button></td>';
echo '</tfoot>';
echo '<table>';
die();
}
else
{
include('config.php');
/*Заливка файлов*/
$uploaddir = '../uploads/';
$uploadfile = $uploaddir.basename($_FILES['photo']['name']);

// Копируем файл из каталога для временного хранения файлов:
if (copy($_FILES['photo']['tmp_name'], $uploadfile))
{
echo "<center><div class='alert alert-success'><strong>Запись успешно добавлена в базу.<br>Файл успешно загружен на сервер</strong></div></center>";
}
else { echo "<center><div class='alert alert-danger'><strong>Ошибка! Не удалось загрузить файл на сервер!</strong></div></center>>"; exit; }
//end zaliv
$connect_to_db=mysql_connect($db_host,$db_username,$db_password) or die("Ошибка соединения:".mysql_error());

mysql_query('set names utf8');
mysql_select_db($db_name, $connect_to_db);
$query="insert into sale
	(`name`,`price`,`photo`, `opis`)
	values ('".$_POST['name']."','".
	$_POST['price']."','".($_FILES['photo']['name'])."','".
	$_POST['opis']."')";
$res= mysql_query($query) or die("Ошибка добавления записи в таблицу...".mysql_error());
echo '<script type="text/javascript">
	<!--
		window.location.href="homeview.php?page=1";
	//->
	</script>';
}
?><br>