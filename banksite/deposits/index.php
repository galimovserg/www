<html>
<head><title>Депозиты</title></head>
<body>
<?php
  require_once "../connect.php";
 ?>
<h2>Вклады:</h2>
 <table border="1">
   <tr>
     <th> Название </th>
     <th> Дата открытия </th>
     <th> Стартовая сумма </th>
     <th> Редактировать </th>
     <th> Уничтожить </th>
<?php
  $res=mysqli_query($db,"
  select deposit.id as id,
  dpprog.name as name,
  dpprog.percent as percent,
  deposit.date as date,
  deposit.start_value as value
  from deposit, dpprog where deposit.prog_id=dpprog.id");
  while($row=mysqli_fetch_array($res)){
    echo "<tr>";
    echo "<td>".$row["name"]." (".$row["percent"]."%)"."</td>";
    echo "<td>".$row["date"]."</td>";
    echo "<td>".$row["value"]."</td>";
    echo "<td><a href='edit.php?id=".$row["id"]."'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id=".$row["id"]."'>Удалить</a></td>";
    echo "</tr>";
  }
 ?>
</table>
<?php
  $num=mysqli_num_rows($res);
  echo "Всего депозитов: $num";
?>
<p>
<a href="new.php">Открыть вклад</a><br>
<a href="gen_xls.php">Отчет в XLS</a>
<a href="gen_pdf.php">Отчет в PDF</a>
<hr>
<a href="../banks">Банки</a><br>
<a href="../depositprograms">Программы депозитов</a><br>
<a href="../deposits">Вклады</a><br>
</body>
</html>
