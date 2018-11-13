<html>
<head><title>Сведения о пользователях сайта</title></head>
<body>
<?php
  $db=mysqli_connect("localhost","root") or die ("Невозможно подключиться к серверу");
  mysqli_select_db($db,"users") or die ("Нет такой БД!");
 ?>
 <h2>Зарегистрированные пользователи:</h2>
 <table border="1">
   <tr>
     <th> Имя </th>
     <th> E-mail </th>
     <th> Редактировать </th>
     <th> Уничтожить </th>
<?php
  $res=mysqli_query($db,"select id_user, user_name, user_e_mail from user");
  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row["user_name"]."</td>";
    echo "<td>".$row["user_e_mail"]."</td>";
    echo "<td><a href='edit.php?id=".$row["id_user"]."'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id=".$row["id_user"]."'>Удалить</a></td>";
    echo "</tr>";
  }
 ?>
</table>
<?php
  $num=mysqli_num_rows($res);
  echo "Всего пользователей: $num";
?>
<p>
<a href="new.html">Добавить пользователя</a>
</body>
</html>
