<html>
<head><title>Фильмы</title></head>
<body>
<?php
  require_once "connect.php";
 ?>
<h2>Каталог фильмов:</h2>
 <table border="1">
   <tr>
     <th> Название </th>
     <th> Жанр </th>
     <th> Режиссер </th>
     <th> Сборы </th>
     <th> Редактировать </th>
     <th> Уничтожить </th>
<?php
  $res=mysqli_query($db,"select * from movie");
  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row["film_name"]."</td>";
    echo "<td>".$row["film_genre"]."</td>";
    echo "<td>".$row["film_director"]."</td>";
    echo "<td>".$row["film_boxoff"]."</td>";
    echo "<td><a href='edit.php?id=".$row["film_id"]."'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id=".$row["film_id"]."'>Удалить</a></td>";
    echo "</tr>";
  }
 ?>
</table>
<?php
  $num=mysqli_num_rows($res);
  echo "Всего фильмов: $num";
?>
<p>
<a href="new.html">Добавить фильм</a>
<hr>
<a href="../films">Фильмы</a><br>
<a href="../halls">Кинозалы</a><br>
<a href="../sessions">Расписание</a><br>
</body>
</html>
