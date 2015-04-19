<?
include('../theme/head.html');
session_start();
unset($_SESSION['login']);	
unset($_SESSION['id']);
session_destroy();
echo <<<END
<center><div class='alert alert-success'><strong>Вы успешно вышли с сайта! <a href='index.php'>Главная страница</a></strong> </div></center>
END;
 echo '<script type="text/javascript">window.location.href="index.php";</script>';
?>	