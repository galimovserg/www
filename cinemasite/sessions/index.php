<html>
<head><title>Расписание</title></head>
<body>
<?php
  require_once "connect.php";
 ?>
<h2>Список сеансов:</h2>
 <table border="1">
   <tr>
     <th> Кинозал </th>
     <th> Фильм</th>
     <th> Дата и время </th>
     <th> Редактировать </th>
     <th> Уничтожить </th>
<?php
  $res=mysqli_query($db,"select mvsession.id as id, hall.name as hname, movie.film_name as mname, date, time  from mvsession, hall, movie where mvsession.hall_id=hall.id and mvsession.movie_id=movie.film_id");
  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row["hname"]."</td>";
    echo "<td>".$row["mname"]."</td>";
    echo "<td>".$row["date"]." ".$row["time"]."</td>";
    echo "<td><a href='edit.php?id=".$row["id"]."'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id=".$row["id"]."'>Удалить</a></td>";
    echo "</tr>";
  }
 ?>
</table>
<?php
  $num=mysqli_num_rows($res);
  echo "Всего сеансов: $num";
?>
<p>
<a href="new.php">Добавить киносеанс</a><br>
<hr>
<a href="../films">Фильмы</a><br>
<a href="../halls">Кинозалы</a><br>
<a href="../sessions">Расписание</a><br>
</body>
</html>
