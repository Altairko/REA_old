<?
include('config.php');
$connect_to_db=mysql_connect($db_host,$db_username,$db_password);
mysql_select_db($db_name, $connect_to_db);
mysql_query('set names utf8');
$query_exp="SELECT * FROM `bay_user` where id=".$_GET['id'];
$res_exp=mysql_query($query_exp);
$item=mysql_fetch_array($res_exp);

/*Заполнение шаблона*/
include_once '../modules/PHPWord.php';
$PHPWord = new PHPWord();
$templateProcessor = $PHPWord->loadTemplate('../template.docx');
$templateProcessor->setValue('Fam', ''.$item['Fam'].'');
$templateProcessor->setValue('Name', ''.$item['Name'].'');
$templateProcessor->setValue('Otch', ''.$item['FName'].'');
$templateProcessor->setValue('price', ''.$item['price'].'');
$templateProcessor->setValue('date', ''.date("d.m.Y").'');
$templateProcessor->save('../doc/'.md5(date("Ysmg").'Solarsystem').'.docx');
$query_update="UPDATE bay_user SET doc='".('../doc/'.md5(date("Ysmg").'Solarsystem').'.docx')."' WHERE id=".$_GET['id'];
mysql_query($query_update);
echo 		'<script type="text/javascript">
			window.location.href="index.php?page=1";
			</script>';

?>