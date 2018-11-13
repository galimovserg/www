<?php
  $db=mysqli_connect("localhost","root") or die ("Невозможно подключиться к серверу");
  mysqli_select_db($db,"users") or die ("Нет такой БД");
  $res=mysqli_query($db,"delete from user where id_user='".
  $_GET["id"]."'");
  header("Location: index.php");
  exit;

 ?>
