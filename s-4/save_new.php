<?php
  $db=mysqli_connect("localhost","root") or die ("Невозможно подключиться к серверу");
  mysqli_select_db($db,"users") or die ("Нет такой БД!");
  $res=mysqli_query($db,"insert into user set user_name='".$_GET["name"]."', user_login='".$_GET["login"]
  ."', user_password='".$_GET["password"]."', user_e_mail='".$_GET["e_mail"]."', user_info='".$_GET["info"]."'");
  if(mysqli_affected_rows($db)>0){
    echo "<p>Спасибо!<br>";
    echo "<a href='index.php'>Вернутся к списку пользователей</a>";
  }else{
    echo "ошибка";
  }
 ?>
