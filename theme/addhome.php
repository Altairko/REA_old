<?
echo '
<div class="alert alert-info">
        <strong><center>Редактирование сведений о клиенте.</center></strong>
</div>
  <form align="center" class="form-horizontal" name="add" method="post" enctype="multipart/form-data" action="../admin/addhome.php">
<div class="form-group">
    <label  class="col-sm-4 control-label">Наименование:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="name" placeholder="Наименование" value="'.$item['name'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Цена:</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="price" placeholder="руб.коп" value="'.$item['price'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Фото:</label>
    <div class="col-sm-5">
      <input type="file" class="form-control" name="photo" value="'.$item['photo'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Описание:</label>
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
?>
