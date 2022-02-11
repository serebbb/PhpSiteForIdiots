<!DOCTYPE html>
<html>
  <head>
    <title>Главная страница сайта</title>
  </head>
  <body>
    <?
    require 'connectToDataBase.php';
    if(isset($_SESSION['logged_user']))
    {
      echo "<h1> Привет ".$_SESSION['logged_user']['login']."</h1>";
      echo '<a href="usersPage.php">Посмотреть кто зарегистрирован<br></a>';
      echo '<a href="logoutPage.php">Выйти</a>';
    }
    else {
      echo "<h1> Привет гость</h1>";
      echo "Чтобы посмотреть кто зарегистрирован необходимо ";
      echo '<a href="enterPage.php">авторизоваться</a>';
    }
    ?>
  </body>
</html>
