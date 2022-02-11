<!DOCTYPE html>
<html>
  <head>
    <title>Пользователи</title>
  </head>
  <body>
    <?
      require 'connectToDataBase.php';
      if(isset($_SESSION['logged_user']))
      {
        $users = R::getAll("SELECT * FROM users");
        echo "На сайте зарегистрированы:<br>";
        foreach ($users as $value)
        {
          echo $value['login']."<br>";
        }
        echo '<a href="mainPage.php">На главную<br></a>';
      }
    ?>
  </body>
</html>
