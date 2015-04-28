<?php
	session_start();
	include('../theme/head.html');
	if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
	include('../theme/flogin.html');
}
else{
	//Функция обновляет запись в таблице БД
if(($_POST['obj_name']=='') or ($_POST['price']=='') or ($_POST['opis']=='') or ($_POST['reserv']==''))
die('<center><div class="alert alert-danger"><strong>Все поля должны быть заполнены...</strong></div></center>') ;
include('config.php');
$connect_to_db =
	mysql_connect($db_host,$db_username,$db_password);
	mysql_select_db($db_name, $connect_to_db);
	mysql_query('SET NAMES UTF8');
$obj_name = mysql_real_escape_string( $_POST['obj_name'] );
$price = mysql_real_escape_string( $_POST['price'] );
$opis = mysql_real_escape_string( $_POST['opis'] );
if (isset($_POST['reserv'])) 
   foreach($_POST['reserv'] as $key=>$value) 
      echo $value.'<BR>';
//$reserv = mysql_real_escape_string( $_POST['reserv'] );


$query = "UPDATE sale SET obj_name='".$obj_name."',price='".$price."',".
	"opis='".$opis."',".
	"reserv='".$reserv."' WHERE id=".$_GET['id'];
mysql_query ($query) or die("<center><div class='alert alert-danger'><strong>Ошибка запроса (Edit): ".mysql_error()."</strong></div></center>");
echo ($reserv);
/*echo '<script type="text/javascript">
		window.location.href="homeview.php?page=1";
	</script>';*/
die();
}
?>