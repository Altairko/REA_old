<?php
 $db=@mysqli_connect("localhost", "root", "pass", "rea");
  //mysql_select_db ("rea",$db);
if (!$db) { echo ("<center><div class='alert alert-danger'>
        <strong>Соединение с базой данных не установлено. Обратитесь к вашему сис.админу.</strong>
      </div></center>
	"); }
?>
