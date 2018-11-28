<?php
  $db=mysqli_connect("localhost","root") or die("Ошибка подключения к серверу БД.");
  mysqli_select_db($db,"movies") or die("Ошибка выбора БД.");
 ?>
