<?
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
include('config.php');
include('head.html');




// Проверяем, пусты ли пересменные логина и id пользователя
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
	
// Если пусты, то мы не выводим форму входа
echo <<<END
 <div class="container">

      <div class="starter-template">
         <form class="form-signin" role="form" action="login.php"  method="POST">
        <h3 class="form-signin-heading">Пожалуйста войдите!</h3>
        <input name="login" type="text" class="form-control" placeholder="ID" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Пароль" required>
       
        <button name="submit" class="btn btn-lg btn-success" type="submit">Войти
      </form>
      </div>

    </div><!-- /.container -->
        
  </body>
</html>
END;

}
else
   {
   // Если не пусты, то мы выводим ссылку
    echo "<center><div class='alert alert-success'>
        Вы вошли на сайт, как <strong>".$_SESSION['login']."</strong><form action='logout.php' method='post'><button type='submit'   class='btn btn-xs btn-danger' name='submit'>Выход</button></form>	
      </div></center><br>";
    echo <<<END

END;
}


?> 
   
