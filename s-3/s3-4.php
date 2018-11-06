<html>
<head>
  <title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
  <?php
    $f=0;
    $ms="Неверный формат!<br>";
    if(isset($_POST["reg"])){
      if(isset($_POST["login"])){
        if($_POST["login"]=="sergey"){
          $f=1;
          $name="Сергей Галимов";
        }
        if($_POST["login"]=="ilnar"){
          $f=1;
          $name="Надербаев Ильнар";
        }
        if($_POST["login"]=="admin"){
          $f=1;
          $name="Администратор";
        }
        if($_POST["login"]=="guest"){
          $f=1;
          $name="Гость";
        }
        else{
          $ms="Вы не зарегестрированный пользователь.<br>";
        }
      }
    }
    if($f==0){
      echo $ms;
      echo '<form method="post" action='.$_SERVER['PHP_SELF'].'>
          LogIn: <input type="text" name="login" size="12" autocomplete="off"><br>
          <input type="submit" value="войти" name="reg">
        </form>';
    }else{
      echo "Уважаемый ".$name.", мы не рады вам!";
    }
   ?>

</body>
</html>
