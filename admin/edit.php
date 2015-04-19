<?php
	session_start();
	ini_set('display_errors',0);
error_reporting(0);
$db_host='localhost';
$db_name='rea';
$db_username='root';
$db_password='DnS357203';
$db_table_to_show='bay_user';
$connect_to_db=mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name, $connect_to_db);
$query="select * from ".$db_table_to_show." where id>0 limit 1";
$res=mysql_query($query) ;
	
		mysql_query('SET NAMES UTF8');
		$query='SELECT * from bay_user where id='.$_GET['id'];
		$res=mysql_query($query) or die ("Ошибка запроса: ".mysql_error());
		$item=mysql_fetch_array($res);
include('../theme/head.html');

// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
	
include('../theme/flogin.html');
}
else
   {		

include_once('../theme/edit.php');
}
?>