<html>
  <head>
    <meta charset="utf-8">
    <title>Добавление новой программы</title>
  </head>
  <body>
    <h2>Добавление</h2>
    <form action="save_new.php" metod="get">
      Название программы: <input type="text" name="name" maxlength="40" size="40" autocomplete="off"><br>
      % годовых: <input type="text" name="percent" size="20" autocomplete="off"><br>
      <?php
        require_once '../connect.php';
        echo "Банк: <select name='bid'>";
        $res=mysqli_query($db,"select * from bank");
        while($row=mysqli_fetch_array($res)){
          echo "<option value='".$row["id"]."'>";
          echo $row["name"];
          echo "</option>";
        }
        echo "</select><br>";
        ?>
      <p>
        <input type="submit" name="add" value="Добавить">
        <input type="reset" name="b2" value="Очистить"></p>
    </form>
    <a href="index.php">Вернуться к каталогу</a>
  </body>
</html>
