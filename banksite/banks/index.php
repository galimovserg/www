<html>
<head><title>Банки</title></head>
<body>
<?php
  require_once "../connect.php";
 ?>
<h2>Каталог банков:</h2>
 <table border="1">
   <tr>
     <th> Название </th>
     <th> Класс надежности </th>
     <th> Страна </th>
     <th> Активы </th>
     <th> Редактировать </th>
     <th> Уничтожить </th>
<?php
  $res=mysqli_query($db,"select * from bank");
  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["rclass"]."</td>";
    echo "<td>".$row["country"]."</td>";
    echo "<td>".$row["avalue"]."</td>";
    echo "<td><a href='edit.php?id=".$row["id"]."'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id=".$row["id"]."'>Удалить</a></td>";
    echo "</tr>";
  }
 ?>
</table>
<?php
  $num=mysqli_num_rows($res);
  echo "Всего банков: $num";
?>
<p>
<a href="new.html">Добавить банк</a>
<hr>
<a href="../banks">Банки</a><br>
<a href="../depositprograms">Программы депозитов</a><br>
<a href="../deposits">Вклады</a><br>
</body>
</html>
