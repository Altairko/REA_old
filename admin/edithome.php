<?php
session_start();
include_once('../theme/head.html');
include('config.php');
$db_table_to_show='sale';
$connect_to_db=mysql_connect($db_host, $db_username, $db_password);
mysql_select_db($db_name, $connect_to_db);
$query="select * from ".$db_table_to_show." where id>0 limit 1";
$res=mysql_query($query) ;

		mysql_query('SET NAMES UTF8');
		$query='SELECT * from sale where id='.$_GET['id'];
		$res=mysql_query($query) or die ("Ошибка запроса: ".mysql_error());
		$item=mysql_fetch_array($res);


// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']) or empty($_SESSION['usern']))
{
include('../theme/flogin.html');
}
else
   {
   	include('../theme/userlogin.php');
include_once('../theme/edithome.php');
}
?>