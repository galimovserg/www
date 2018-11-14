<html>
<body>
<?php
  $db=mysqli_connect("localhost","root") or die("Ошибка подключения к серверу БД!");
  mysqli_select_db($db,"users");
  $res=mysqli_query($db,"update user set  user_name='".$_GET["name"]."', user_login='".$_GET["login"]
  ."', user_password='".$_GET["password"]."', user_e_mail='".$_GET["e_mail"]."', user_info='".$_GET["info"]."'");
  if(mysqli_affected_rows($db)>0){
    echo "<p>Все сохранено!<br>";
    echo "<a href='index.php'>Вернутся к списку пользователей</a>";
  }else{
    echo "<p>ошибка<br>";
    echo "<a href='index.php'>Вернутся к списку пользователей</a>";
  }
 ?>

</body>
