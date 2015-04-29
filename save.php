<?php
include('theme/head.html');
//var_dump(($_POST['name']=='')or($_POST['price']=='') or ($_FILES['photo']['name'])or($_POST['opis']==''));
if (($_POST['Name']=='')or($_POST['Fam']=='') or ($_POST['FName']=='')or($_POST['email']=='')or($_POST['phone']==''))
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
include('admin/config.php');
$connect_to_db=mysql_connect($db_host,$db_username,$db_password) or die("Ошибка соединения:".mysql_error());

mysql_query('set names utf8');
mysql_select_db($db_name, $connect_to_db);
$query1="UPDATE `sale` SET `reserv`='1' WHERE `id`='".$_GET['id']."'";
$res1= mysql_query($query1);
$query="insert into bay_user
	(`Name`,`Fam`,`FName`, `date`,`price`,`email`,`phone`,`naimen`,`id_sale`)
	values ('".$_POST['Name']."','".
	$_POST['Fam']."','".$_POST['FName']."','".$_POST['date']."','".$_POST['price']."','".$_POST['email']."',
	'".$_POST['phone']."','".$_POST['obj_name']."','".$_GET['id']."')";
$res= mysql_query($query) or die("Ошибка добавления записи в таблицу...".mysql_error());

echo '<script type="text/javascript">
	<!--
		window.location.href="index.php?page=1";
	//->
	</script>';
}
?><br>