<?
mysql_query('SET NAMES UTF8');
include('config.php');
$connect_to_db = bay_user;
		mysql_select_db($db_name, $connect_to_db);
$query_exp="SELECT * FROM `bay_user` where id=".$_GET['id'];
$res_exp=mysql_query($query_exp) || die(mysql_error('Ошибочка'));
$item=mysql_fetch_array($res_exp);
echo mysql_fetch_array($res_exp);
include_once '../modules/PHPWord.php';
$PHPWord = new PHPWord();
//$document = $PHPWord->loadTemplate('name2.docx');


/*$templateProcessor = $PHPWord->loadTemplate('../template.docx');
$templateProcessor->setValue('Fam', ''.$item['Fam'].'');
$templateProcessor->setValue('Name', ''.$item['Name'].'');
$templateProcessor->setValue('FName', ''.$item['FName'].'');
$templateProcessor->setValue('date', ''.date("d.m.Y").'');
$templateProcessor->save(../doc/md5(date("Ysmg").'Solarsystem').'.docx');
*/
?>