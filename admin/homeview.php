<?php
session_start();
	include('../theme/head.html');
	if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
	
// Если пусты, то мы не выводим форму входа
include('../theme/flogin.html');
}
else{
include('../theme/userlogin.php');
ini_set('display_errors',0);
error_reporting(0);
$kolv_zap=10;
$page=$_GET['page'];
$n1=($page-1)*$kolv_zap;
include('config.php');
$db_table_to_show='sale';
$connect_to_db=mysql_connect($db_host, $db_username, $db_password) or die("Ошибка соединения: ".mysql_error());
mysql_select_db($db_name, $connect_to_db) or die("Ошибка открытия БД: ".mysql_error());
$query="select * from ".$db_table_to_show." where id>0 limit 1";
$res=mysql_query($query) or die("Ошибка открытия таблицы БД:".mysql_error());
$item=mysql_fetch_array($res);


$res = mysql_query("SELECT COUNT(*) FROM sale");
$row = mysql_fetch_row($res);
$total = $row[0]; // всего записей
$maxpage=ceil($total/$kolv_zap);
$res=mysql_query($query);
$item=mysql_fetch_array($res);


if (!isset($item['id']))
{
ECHO '<br><br><br><br><br><br><br><br><br><br>
<table align="center">
<tbody>
<tr width="40%">
<td align="center">Сообщение:</td>
</tr>
<tr>
<td align="center">Таблица пуста!</td>
</tr>
</tbody>
</tfoot>
<td align="center"><button type="button" onClick="history.back();"> Закрыть</button></td>
</tfoot>
</table>';
die();
}
// используем кодировку utf8:
mysql_query('SET NAMES UTF8');
$qr_result = mysql_query("select * from ".$db_table_to_show);
if (!isset($_GET["action"])) $_GET["action"] = "showlist";
// вывод всех записей из таблицы БД:

$query='SELECT `id`, `obj_name`, `price`, `photo`, `opis` FROM `sale` LIMIT '.$n1.' , '.$kolv_zap.'';
$res=mysql_query($query);
echo 
'<table class="table table-striped">
<thead>
<tr>
<th>
<div class="alert alert-info"><strong><center> Сведения об объектах </center></strong></div>
</th>
</tr>
</head>
</table>

<table class="table table-striped">
<thead>
<tr>
<th>id</th>
<th>Наименование</th>
<th>Цена <span class="glyphicon glyphicon-ruble"></th>
<th>Фото</th>
<th>Описание</th>
<th></th>
<th></th>
</tr>
</thead>

<tfoot>
<tr>
<th>id</th>
<th>Наименование</th>
<th>Цена <span class="glyphicon glyphicon-ruble"></th>
<th>Фото</th>
<th>Описание</th>
<th></th>
<th></th>
</tr>
</tfoot>';

while ($item=mysql_fetch_array($res))
	{
	  echo '<tr>';
	  echo '<td>'.$item['id'].'</td>';
	  echo '<td>'.$item['obj_name'].'</td>';
	  echo '<td>'.$item['price'].'</td>';
	  echo '<style>#pic{width:240px; height:240px;}</style><td><img id="pic" class="img-thumbnail" src=../uploads/'.$item['photo'].' alt="Изображение объекта"></td>';
	  echo '<td class="col-md-4">'.$item['opis'].'</td>';
	  echo '<td> <a href=edit.php?id='.$item['id'].'><span class="glyphicon glyphicon-pencil"></span></a></td>';
	  echo '<td><a href=delete.php?id='.$item['id'].'><span class="glyphicon glyphicon-remove"></span></a></td>';
      echo '</tr>';	 
    }
echo'    
</table>

<table>	
<thead>
<tr>
<th>
</th>
</tr>
</head>
</table>
<center>
<ul class="pagination">
    <li>';
    if ($page>=2){
      echo'<a href="homeview.php?page='.($page-1).'" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>';
 	 }
 	 else{
  	echo'<span aria-hidden="true">&laquo;</span>';	
  	}
    echo'</li>';
    for ($i=1;$i<=$maxpage;$i++){
    echo'<li><a href="homeview.php?page='.($i).'">'.$i.'</a></li>';
   	}
   echo'<li>';
   if ($page<$maxpage) {
     echo' <a href="homeview.php?page='.($page+1).'" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>';
 	}
 	else{
  	echo'<span aria-hidden="true">&raquo;</span>';	
  	}
   echo' </li>
  </ul>';

	echo '<div class="alert alert-info">';	
	echo 'Всего страниц:'.$maxpage;
	echo '<br>Сейчас вы на странице:'.$page;
	echo '</div>';
echo'</center></body>';
}