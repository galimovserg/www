<html>
<head><title>Редактирование данных о пользователе</title></head>
<body>
<?php
  $db=mysqli_connect("localhost","root") or die("Ошибка подключения к серверу БД!");
  mysqli_select_db($db,"users") or die("Нет такой БД!");
  $rows=mysqli_query($db,"select user_name, user_login, user_password, user_e_mail, user_info from user where id_user=".
  $_GET["id"]);
  while($st=mysqli_fetch_array($rows)){
    $id=$_GET["id"];
    $name=$st["user_name"];
    $login=$st["user_login"];
    $password=$st["user_password"];
    $e_mail=$st["user_e_mail"];
    $info=$st["user_info"];
  }
 ?>
 <form action="save_edit.php" metod="get">
   Имя: <input type="text" name="name" size="50" autocomplete="off" value="<?php echo $name; ?>"><br>
   Логин: <input type="text" name="login" size="20" autocomplete="off" value="<?php echo $login; ?>"><br>
   Пароль: <input type="password" name="password" size="20" autocomplete="off" value="<?php echo $password; ?>"><br>
   E-mail: <input type="text" name="e_mail" size="30" autocomplete="off" value="<?php echo $e_mail; ?>"><br>
   Информация: <br><textarea name="info" rows="4" cols="40" autocomplete="off"><?php echo $info; ?></textarea>
   <p>
     <input type="submit" name="save" value="Сохранить">
 </form>
 <p>
   <a href="index.php">Вернуться к списку пользователей</a>
</body>
</html>
