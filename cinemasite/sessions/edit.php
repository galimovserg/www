<html>
<head><title>Редактор</title></head>
<body>
<?php
  require_once "connect.php";
  $res=mysqli_query($db,"select * from mvsession where id=".$_GET["id"]);
  while ($st=mysqli_fetch_array($res)) {
    $movie_id=$st["movie_id"];
    $hall_id=$st["hall_id"];
    $date=$st["date"];
    $time=$st["time"];
  }
 ?>
 <form action="save_edit.php" metod="get">
   <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
  <?php echo "Кинозал: <select name='hall_id'>";
   $res=mysqli_query($db,"select * from hall");
   while($row=mysqli_fetch_array($res)){
     if($row["id"]==$hall_id){
       echo "<option value='".$row["id"]."' selected>";
     }else{
        echo "<option value='".$row["id"]."'>";
     }
     echo $row["name"];
     echo "</option>";
   }
   echo "</select><br>";
   echo "Фильм: <select name='movie_id'>";
   $res=mysqli_query($db,"select * from movie");
   while($row=mysqli_fetch_array($res)){
     if($row["film_id"]==$movie_id){
       echo "<option value='".$row["film_id"]."' selected>";
     }else{
        echo "<option value='".$row["film_id"]."'>";
     }
     echo $row["film_name"];
     echo "</option>";
   }

   echo "</select><br>";
   ?>
   Дата: <input type="date" name="date" size="30" autocomplete="off" value="<?php echo $date;?>"><br>
   Время: <input type="time" name="time" size="30" autocomplete="off"  value="<?php echo $time;?>"><br>
   <p>
     <input type="submit" name="add" value="Сохранить">
 </form>
 <a href="index.php">Вернуться к расписанию</a>
</body>
