<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My site</title>
  </head>
  <body>
    <h1>Вход на сайт</h1>
    <?
      session_start();
      if(isset($_SESSION['logged_user']))
        header('Location: /');
    ?>
    <form action="enter.php" method="post">
      <p>Логин: <input type="text" name="login"
        value="<?php echo $_SESSION['login']; ?>"></p>
      <p>Пароль: <input type="password" name="password"></p>
      <p><input type="submit" name="submit" value="Войти"></p>
    </form>

    <a href="registrationPage.php">Регистрация</a>
  </body>
</html>
