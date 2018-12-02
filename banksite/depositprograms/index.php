<html>
<head><title>Программы депозитов</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
  require_once "../connect.php";
 ?>
<h2>Доступные программы:</h2>
 <table border="1">
   <tr>
     <th> Название </th>
     <th> % годовых </th>
     <th> Банк </th>
     <th> Редактировать </th>
     <th> Уничтожить </th>
<?php
  $res=mysqli_query($db,"
  select
  dpprog.id as id,
  dpprog.name as dpname,
  dpprog.percent as percent,
  bank.name as bname
  from bank, dpprog
  where bank.id=dpprog.bid");
  $fl=false;
  while($row=mysqli_fetch_array($res)){
    $fl=!$fl;
    if($fl){
      echo "<tr class='stone'>";
    }
    else{
      echo "<tr class='sttwo'>";
    }
    echo "<td>".$row["dpname"]."</td>";
    echo "<td>".$row["percent"]."</td>";
    echo "<td>".$row["bname"]."</td>";
    echo "<td><a href='edit.php?id=".$row["id"]."'>Редактировать</a></td>";
    echo "<td><a href='delete.php?id=".$row["id"]."'>Удалить</a></td>";
    echo "</tr>";
  }
 ?>
</table>
<?php
  $num=mysqli_num_rows($res);
  echo "Всего программ: $num";
?>
<p>
<a href="new.php">Добавить программу</a>
<hr>
<a href="../banks">Банки</a><br>
<a href="../depositprograms">Программы депозитов</a><br>
<a href="../deposits">Вклады</a><br>
</body>
</html>
