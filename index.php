<?
include('config.php');
include('head.html');
include('login.php');	
?>
<!DOCTYPE html>
<html lang="ru">


  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">REA</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Главная</a></li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template" method="POST">
         <form class="form-signin" role="form">
        <h3 class="form-signin-heading">Пожалуйста войдите!</h3>
        <input name="login" type="text" class="form-control" placeholder="ID" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Пароль" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Запомнить <br>
          <input type="checkbox" name="not_attach_ip"> Не связывать с IP(не безопасно)
        </label>
        <button name="submit" class="btn btn-lg btn-success" type="submit">Войти</button>
      </form>
      </div>

    </div><!-- /.container -->
    
   
  </body>
</html>