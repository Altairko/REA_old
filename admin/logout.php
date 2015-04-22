<?
session_start();
include('../theme/head.html');
unset($_SESSION['login']);	
unset($_SESSION['id']);
unset($_SESSION['usern']);
session_destroy();
echo <<<END
<center><div class='alert alert-success'><strong>Вы успешно вышли с сайта! <a href='index.php'>Главная страница</a></strong> </div></center>
END;
 echo '<script type="text/javascript">window.location.href="index.php";</script>';
?>	