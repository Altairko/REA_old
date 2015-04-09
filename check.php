<?
// Скрипт проверки

include('config.php');
include('head.html');

if (isset($_COOKIE['cid']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($db, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE id = '".intval($_COOKIE['cid'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['cid'])
 or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0")))
    {
        setcookie("cid", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/");
         echo "<div align='center' class='alert alert-danger'><strong>Хм, что-то не получилось</div>";
    }
    else
    {
        echo "<div align='center' class='alert alert-danger'><strong>Привет, ".$userdata['user_login'].". Всё работает!</strong></div>";
    }
}
else
{
    echo "<div align='center' class='alert alert-danger'><strong>Включите куки</strong></div>";
}
?>