<html>
  <head>
    <meta charset="utf-8">
    <title>Добавление нового фильма</title>
  </head>
  <body>
    <h2>Добавление</h2>
    <form action="save_new.php" metod="get">
    <?php
      require_once 'connect.php';
      echo "Кинозал: <select name='hall_id'>";
      $res=mysqli_query($db,"select * from hall");
      while($row=mysqli_fetch_array($res)){
        echo "<option value='".$row["id"]."'>";
        echo $row["name"];
        echo "</option>";
      }
      echo "</select><br>";
      echo "Фильм: <select name='film_id'>";
      $res=mysqli_query($db,"select * from movie");
      while($row=mysqli_fetch_array($res)){
        echo "<option value='".$row["film_id"]."'>";
        echo $row["film_name"];
        echo "</option>";
      }

      echo "</select><br>";
    ?>
      Дата: <input type="date" name="date" size="30" autocomplete="off"><br>
      Время: <input type="time" name="time" size="30" autocomplete="off"><br>
      <p>
        <input type="submit" name="add" value="Добавить">
        <input type="reset" name="b2" value="Очистить"></p>
    </form>
    <a href="index.php">Вернуться к расписанию</a>
  </body>
</html>
