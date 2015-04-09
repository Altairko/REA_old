<?
include(config.php);
if (!$dbconnect) { echo ("<center><div class='alert alert-danger'>
        <strong>Соединение с базой данных не установлено. Обратитесь к вашему сис.админу.</strong>
      </div></center>
	"); }	
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
	<!-- Custom styles for this template -->
    <link href="/modules/bootstrap/css/starter-template.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>

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
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
         <form class="form-signin" role="form">
        <h3 class="form-signin-heading">Пожалуйста войдите!</h3>
        <input type="email" class="form-control" placeholder="ID" required autofocus>
        <input type="password" class="form-control" placeholder="Пароль" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Запомнить
        </label>
        <button class="btn btn-lg btn-success" type="submit">Войти</button>
      </form>
      </div>

    </div><!-- /.container -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/modules/jquery/jquery-2.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/modules/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>