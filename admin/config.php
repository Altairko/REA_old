<?php
error_reporting(0);
$db_host='localhost';
$db_name='rea';
$db_username='root';
$db_password='';
$db = mysql_connect ($db_host,$db_username,$db_password);
mysql_select_db ($db_name,$db);
if (!$db) { echo ("<center><div class='alert alert-danger'>
        <strong>Соединение с базой данных не установлено. Обратитесь к вашему сис.админу.</strong>
      </div></center>
	"); }
?>
