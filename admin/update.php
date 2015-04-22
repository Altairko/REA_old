<?php
	session_start();
	include('../theme/head.html');
	if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
	include('../theme/flogin.html');
}
else{
	//Функция обновляет запись в таблице БД
if(($_POST['Fam']=='') or ($_POST['Name']=='') or ($_POST['FName']=='')
or ($_POST['date']=='') or ($_POST['email']=='') or ($_POST['phone']=='') or ($_POST['price']=='') or ($_POST['naimen']==''))
die('<center><div class="alert alert-danger"><strong>Все поля должны быть заполнены...</strong></div></center>') ;
include('config.php');
$connect_to_db =
	mysql_connect($db_host,$db_username,$db_password);
	mysql_select_db($db_name, $connect_to_db);
	mysql_query('SET NAMES UTF8');
$fam = mysql_real_escape_string( $_POST['Fam'] );
$name = mysql_real_escape_string( $_POST['Name'] );
$fname = mysql_real_escape_string( $_POST['FName'] );
$date = mysql_real_escape_string( $_POST['date'] );
$email = mysql_real_escape_string( $_POST['email'] );
$phone = mysql_real_escape_string( $_POST['phone'] );
$price = mysql_real_escape_string( $_POST['price'] );
$naimen = mysql_real_escape_string( $_POST['naimen'] );

$query = "UPDATE bay_user SET Fam='".$fam."',".
	"Name='".$name."',FName='".$fname."',".
	"date='".$date."',".
	"email='".$email."',".
	"phone='".$phone."',".
	"price='".$price."',".
	"naimen='".$naimen."' WHERE id=".$_GET['id'];
mysql_query ($query)
	or die("<center><div class='alert alert-danger'><strong>Ошибка запроса (Edit): ".mysql_error()."</strong></div></center>");
echo '<script type="text/javascript">
		window.location.href="index.php?page=1";
	</script>';
die();
}
?>