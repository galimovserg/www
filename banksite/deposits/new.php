<html>
  <head>
    <meta charset="utf-8">
    <title>Открытие вклада</title>
  </head>
  <body>
    <h2>Добавление</h2>
    <form action="save_new.php" metod="get">
      <?php
        require_once '../connect.php';
        echo "Банк: <select name='prog_id'>";
        $res=mysqli_query($db,"select * from dpprog");
        while($row=mysqli_fetch_array($res)){
          echo "<option value='".$row["id"]."'>";
          echo $row["name"]."( ".$row["percent"]."%)";
          echo "</option>";
        }
        echo "</select><br>";
        ?>
      Дата открытия: <input type="date" name="date" size="30" autocomplete="off"><br>
      Стартовая сумма: <input type="text" name="start_value" size="30" autocomplete="off"><br>
      <p>
        <input type="submit" name="add" value="Добавить">
        <input type="reset" name="b2" value="Очистить"></p>
    </form>
    <a href="index.php">Вернуться к списку</a>
  </body>
</html>
