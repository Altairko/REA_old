<?
include('config.php');
$connect_to_db=mysql_connect($db_host,$db_username,$db_password);
mysql_select_db($db_name, $connect_to_db);
mysql_query('set names utf8');
$query_exp="SELECT `doc` FROM `bay_user` where id=".$_GET['id'];
$res_exp=mysql_query($query_exp);
$item=mysql_fetch_array($res_exp);
function file_force_download($file) {
  if (file_exists($file)) {
    // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
    // если этого не сделать файл будет читаться в память полностью!
    if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    // читаем файл и отправляем его пользователю
    readfile($file);
    exit;
  }
}
$save=file_force_download($item['doc']);
?>