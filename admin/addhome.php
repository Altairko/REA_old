<?
session_start();
include('../theme/head.html');
// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']) or empty($_SESSION['usern']))
{
include('../theme/flogin.html');
}
else
   {
    include('../theme/userlogin.php');
echo '
<div class="alert alert-info">
        <strong><center>Добавление объекта продажи.</center></strong>
</div>
  <form align="center" class="form-horizontal" name="add" method="post" enctype="multipart/form-data" action="add.php">
<div class="form-group">
    <label  class="col-sm-4 control-label">Наименование <span class="glyphicon glyphicon-barcode"></span>:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="name" placeholder="Наименование" value="'.$item['name'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Цена <span class="glyphicon glyphicon-ruble"></span>:</label>
    <div class="col-sm-5">
   <input type="number" class="form-control" name="price" placeholder="руб.коп" value="'.$item['price'].'" >
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Фото <span class="glyphicon glyphicon-camera"></span>:</label>
    <div class="col-sm-5">
      <input type="file" class="form-control" name="photo" >
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Описание <span class="glyphicon glyphicon-comment"></span>:</label>
    <div class="col-sm-4">
      <textarea name="opis" class="form-control" rows="3" placeholder="Описание объекта">'.$item['opis'].'</textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-2">
    <input type="submit" class="btn btn-success" value="Сохранить">
    <button type="button" class="btn btn-danger" onClick="history.back();">Отменить</button>
  </div>
  </div>
  </table>
  </form>
  </body>
</html>';
}
?>
