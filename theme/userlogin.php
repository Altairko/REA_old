<?
echo "<center><div class='alert alert-success'>
        Вы вошли на сайт, как <strong>".$_SESSION['usern']."</strong><form action='logout.php' method='post'><button type='submit'   class='btn btn-xs btn-danger' name='submit' >Выход</button></form>	
      </div></center>";
      ?>