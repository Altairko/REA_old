<?
echo '
<div class="alert alert-info">
        <strong><center>Редактирование сведений об объекте.</center></strong>
</div>
<form class="form-horizontal" role="form" name="editform" action="updatehome.php?id='.$_GET['id'].'" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label  class="col-sm-4 control-label">Наименование:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="obj_name" placeholder="Пяти звездочный отель" value="'.$item['obj_name'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Цена:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="price" placeholder="руб." value="'.$item['price'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Описание:</label>
    <div class="col-sm-4">
      <textarea name="opis" class="form-control" rows="3" placeholder="Описание объекта">'.$item['opis'].'</textarea>
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-4 control-label">Забронировано:</label>
    <div class="col-sm-5">';
      //if ($item['reserv']=='0'){
        /*echo '<input type="checkbox" name="reserv" id="blankCheckbox" value="0">';*/
     // }
      /*else{*/echo '<input type="checkbox" name="reserv[]" id="blankCheckbox" value="1" checked>';
     //  }
   echo' </div>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-5 col-sm-2">
      <button type="submit" value="Сохранить" class="btn btn-success">Сохранить</button> <button type="button" onClick="history.back();" class="btn btn-danger">Отменить</button>
    </div>
  </div>
</form>
</body>
';
?>