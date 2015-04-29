<?php
	session_start();
	include('../theme/head.html');
	if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
	include('../theme/flogin.html');
}
else{
	include('config.php');
	function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }

    $bay = IsChecked('bay','0') ? 1 : 0;
if ($bay==1){
		$query_id="SELECT `id_sale` FROM bay_user WHERE id=".$_GET['id'];
		$id_sale=mysql_query($query_id);
		$item=mysql_fetch_array($id_sale);
		mysql_connect($db_host,$db_username,$db_password);
		$connect_to_db = bay_user;
		mysql_select_db($db_name, $connect_to_db);
		$query_update="UPDATE bay_user SET bay=".$bay." where id=".$_GET['id'];
		$up=mysql_query($query_update);
			$connect_to_db = sale;
			mysql_select_db($db_name, $connect_to_db);
			$query_del="DELETE FROM sale WHERE id=".$item['id_sale']."";
			$del=mysql_query($query_del);
			echo 	'<script type="text/javascript">
				window.location.href="index.php?page=1";
				</script>';
				echo $del;
	}
else{
		//Функция обновляет запись в таблице БД
	if(($_POST['Fam']=='') or ($_POST['Name']=='') or ($_POST['FName']=='')
	or ($_POST['email']=='') or ($_POST['phone']=='')  or ($_POST['naimen']==''))
	die('<center><div class="alert alert-danger"><strong>Все поля должны быть заполнены...</strong></div></center>') ;

	$connect_to_db = bay_user;
	mysql_connect($db_host,$db_username,$db_password);
	mysql_select_db($db_name, $connect_to_db);
	mysql_query('SET NAMES UTF8');
	$fam = mysql_real_escape_string( $_POST['Fam'] );
	$name = mysql_real_escape_string( $_POST['Name'] );
	$fname = mysql_real_escape_string( $_POST['FName'] );
	// $date = mysql_real_escape_string( $_POST['date'] );
	$email = mysql_real_escape_string( $_POST['email'] );
	$phone = mysql_real_escape_string( $_POST['phone'] );
	// $price = mysql_real_escape_string( $_POST['price'] );
	$naimen = mysql_real_escape_string( $_POST['naimen'] );
	$bay=0;
	$query = "UPDATE bay_user SET Fam='".$fam."',".
		"Name='".$name."',FName='".$fname."',".
		"email='".$email."',".
		"bay='".$bay."',".
		"phone='".$phone."',".
		"naimen='".$naimen."' WHERE id=".$_GET['id'];
	mysql_query ($query) or die("<center><div class='alert alert-danger'><strong>Ошибка запроса (Edit): ".mysql_error()."</strong></div></center>");
	echo 	'<script type="text/javascript">
			window.location.href="index.php?page=1";
			</script>';
	die();
}
}
?>