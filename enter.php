<!DOCTYPE html>
<html>
  <head>
    <title>Сайт</title>
  </head>
  <body>
    <?php
      require 'connectToDataBase.php';
      $data = $_POST;
      $login = $data['login'];
      if(!isset($data['submit'])) return;

      $errors = array();
      $user = R::findOne('users', "login = ?", array($data['login']));
      if($user)
      {
        if (password_verify($data['password'], $user->password))
        {
          $_SESSION['logged_user'] = $user;
          echo "<h1>Добро пожаловать ".$_SESSION['logged_user']->login."</h1>";
          echo '<a href="mainPage.php">Перейти на главную страницу<br></a>';
        }
        else
        {
          echo "<h1>Вы ввели неверный пароль</h1>";
          echo '<a href="enterPage.php">Попробовать снова</a><br>';
          echo '<a href="registrationPage.php">Зарегистрироваться</a>';
        }
      }
      else {
        echo "<h1>Пользователь с таким логином не зарегистрирован</h1>";
        echo '<a href="enterPage.php">Попробовать снова</a><br>';
        echo '<a href="registrationPage.php">Зарегистрироваться</a>';
      }
    ?>
  </body>
</html>
