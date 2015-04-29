<?

echo '
<div class="alert alert-info">
        <strong><center>Редактирование сведений о клиенте.</center></strong>
</div>
<form class="form-horizontal" role="form" name="editform" action="update.php?id='.$_GET['id'].'" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label  class="col-sm-4 control-label">Фамилия:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="Fam" placeholder="Иванов" value="'.$item['Fam'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Имя:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="Name" placeholder="Иван" value="'.$item['Name'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Отчество:</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="FName" placeholder="Иванович" value="'.$item['FName'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Дата:</label>
    <div class="col-sm-5">
      <!-- <input type="date" min="1925-01-01" class="form-control" name="date" format="yyyy-mm-dd" placeholder="ГГГГ-ММ-ДД" value="'.$item['date'].'" > -->
      <h5 name="date">'.$item['date'].'</h5>
         </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Email:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" name="email" placeholder="email" value="'.$item['email'].'">
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-4 control-label">Телефон:</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="phone" placeholder="+7(ххх)-ххх-хх-хх" value="'.$item['phone'].'">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Цена:</label>
    <div class="col-sm-2">
     <!-- <input type="number" class="form-control" name="price" placeholder="руб.коп" value="'.$item['price'].'"> -->
     <h5 name="price">'.$item['price'].'</h5>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Описание:</label>
    <div class="col-sm-4">
      <textarea name="naimen" class="form-control" rows="3" placeholder="Описание объекта">'.$item['naimen'].'</textarea>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Куплено:</label>
    <div class="col-sm-5">';
      if ($item['bay']=='0'){
        echo '<input type="checkbox" name="bay[]" id="blankCheckbox" value="0">
          <div class="alert alert-danger" role="alert">
          <center>Внимание, это пункт удалит текущую запись из списка на продажу.</center>
          </div>
        ';
     }
      else{echo '<input type="checkbox" name="bay[]" id="blankCheckbox" value="1" checked >';
      $id_sale=$item['id'];
      }
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