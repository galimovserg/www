<html>
<head><title>Редактор</title></head>
<body>
<?php
  require_once "connect.php";
  $res=mysqli_query($db,"select * from movie where film_id=".$_GET["id"]);
  while ($st=mysqli_fetch_array($res)) {
    $film_name=$st["film_name"];
    $film_genre=$st["film_genre"];
    $film_director=$st["film_director"];
    $film_year=$st["film_year"];
    $film_boxoff=$st["film_boxoff"];
  }
 ?>
 <form action="save_edit.php" metod="get">
   <input type="hidden" name="film_id" value="<?php echo $_GET["id"];?>">
   Название: <input type="text" name="film_name" size="50" autocomplete="off" value="<?php echo $film_name;?>"><br>
   Жанр: <input type="text" name="film_genre" size="20" autocomplete="off" value="<?php echo $film_genre;?>"><br>
   Режиссер: <input type="text" name="film_director" size="20" autocomplete="off" value="<?php echo $film_director;?>"><br>
   Дата выпуска: <input type="date" name="film_year" size="30" autocomplete="off" value="<?php echo $film_year;?>"><br>
   Сборы: <input type="text" name="film_boxoff" size="30" autocomplete="off" value="<?php echo $film_boxoff;?>"><br>
   <p>
     <input type="submit" name="add" value="Сохранить">
 </form>
 <a href="index.php">Вернуться к каталогу фильмов</a>
</body>
