<!DOCTYPE html>
<? session_start(); ?>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Регистрация</title>
  </head>
  <body>
    <h1>Регистрация на сайте</h1>
    <form action="registration.php" method="post">
      <p>Введите ваш логин <input type="text" name="login"
        value="<?php echo $_SESSION['login']; ?>"></p>
      <p>Пароль <input type="password" name="password"?></p>
      <p><input type="submit" name="submit" value="Подтвердить"></p>
    </form>
    <a href="enterPage.php">Войти</a>

  </body>
</html>
