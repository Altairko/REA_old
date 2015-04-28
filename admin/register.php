<?
include('../theme/head.html');	
if (empty($_SESSION['login']) or empty($_SESSION['id']) or empty($_SESSION['usern']))
{
include('../theme/flogin.html');
}
else{
   echo' <div class="starter-template">
         <form class="form-signin" role="form" action="save_user.php" method="POST">
        <h3 class="form-signin-heading">Регистрация нового сотрудника</h3>
        <input name="user_name" type="text" class="form-control" placeholder="Ф.И.О." required autofocus>
        <input name="login" type="text" class="form-control" placeholder="ID" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Пароль" required>       
       <button name="submit" class="btn btn-lg btn-success" type="submit">Зарегистрироваться</button>
      </form>
      </div>

    </div><!-- /.container -->
    
  </body>
</html>';
}?>

  