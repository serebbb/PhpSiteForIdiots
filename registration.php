<?php
    require 'connectToDataBase.php';
    $data = $_POST;
    $_SESSION['login'] = $data['login'];

    if(!isset($data['submit'])) return;

    $errors = array();
    if (trim($data['login']) == '') $errors[] = 'Введите логин';
    if ($data['password'] == '') $errors[] = 'Введите пароль';

    if (R::count('users', "login = ?", array($data['login'])) > 0)
    {
      echo '<div style="color: red;">Пользователь с таким именем уже зарегистрирован<br>';
      echo '<a href="registrationPage.php">Продолжить регистрацию</a>';
      return;
    }

    if(empty($errors))
    {
      $user = R::dispense('users');
      $user->login = $data['login'];
      $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
      R::store($user);
      echo '<div style="color: green;">Вы успешно зарегистрированы<br>';
      echo '<a href="enterPage.php">Войти на сайт</a>';
    }

    else {
      foreach ($errors as $value)
        echo '<div style="color: red;">'."$value<br>";
      echo '<a href="registrationPage.php">Продолжить регистрацию</a>';
    }
?>
