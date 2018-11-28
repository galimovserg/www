<html>
<head><title>Кинозалы</title></head>
<body>
<?php
  require_once "connect.php";
 ?>
<h2>Список залов:</h2>
 <table border="1">
   <tr>
     <th> Название </th>
     <th> Тип </th>
     <th> Редактировать </th>
     <th> Уничтожить </th>
<?php
  $res=mysqli_query($db,"select * from hall");
  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["type"]."</td>";
    echo "<td><a href='edit.php?id=".$row["id"]."'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id=".$row["id"]."'>Удалить</a></td>";
    echo "</tr>";
  }
 ?>
</table>
<?php
  $num=mysqli_num_rows($res);
  echo "Всего кинозалов: $num";
?>
<p>
<a href="new.html">Добавить кинозал</a>
<hr>
<a href="../films">Фильмы</a><br>
<a href="../halls">Кинозалы</a><br>
<a href="../sessions">Расписание</a><br>
</body>
</html>
