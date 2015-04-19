<?
include('../theme/head.html');	
?>	
    <div class="starter-template">
         <form class="form-signin" role="form" action="test/save_user.php" method="POST">
        <h3 class="form-signin-heading">Регистрация нового сотрудника</h3>
        <input name="login" type="text" class="form-control" placeholder="ID" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Пароль" required>       
       <button name="submit" class="btn btn-lg btn-success" type="submit">Зарегистрироваться</button>
      </form>
      </div>

    </div><!-- /.container -->
    
  </body>
</html>


  