<?
include('config.php');
$connect_to_db=mysql_connect($db_host,$db_username,$db_password);
mysql_select_db($db_name, $connect_to_db);
mysql_query('set names utf8');
$query_exp="SELECT * FROM `bay_user` where id=".$_GET['id'];
$res_exp=mysql_query($query_exp);
$item=mysql_fetch_array($res_exp);

include_once '../modules/PHPWord.php';
$PHPWord = new PHPWord();



$templateProcessor = $PHPWord->loadTemplate('../template.docx');
$templateProcessor->setValue('Fam', ''.$item['Fam'].'');
$templateProcessor->setValue('Name', ''.$item['Name'].'');
$templateProcessor->setValue('FName', ''.$item['FName'].'');
$templateProcessor->setValue('date', ''.date("d.m.Y").'');
//header ('Content-Type: application/vnd.ms-word; charset = utf-8\r\n"');
//header ('Content-Disposition: attachment;filename="document.docx"');
//header ('Cache-Control: max-age=0');


$templateProcessor->save('../doc/'.md5(date("Ysmg").'Solarsystem').'.docx');

?>