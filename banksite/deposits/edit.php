<html>
<head><title>Редактор</title></head>
<body>
<?php
  require_once "../connect.php";
  $res=mysqli_query($db,"select * from deposit where id=".$_GET["id"]);
  while ($st=mysqli_fetch_array($res)) {
    $date=$st["date"];
    $prog_id=$st["prog_id"];
    $start_value=$st["start_value"];
  }
 ?>
 <form action="save_edit.php" metod="get">
   <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
   <?php echo "Программа депозита: <select name='prog_id'>";
    $res=mysqli_query($db,"select * from dpprog");
    while($row=mysqli_fetch_array($res)){
      if($row["id"]==$prog_id){
        echo "<option value='".$row["id"]."' selected>";
      }else{
         echo "<option value='".$row["id"]."'>";
      }
      echo $row["name"]."( ".$row["percent"]."%)";
      echo "</option>";
    }
    echo "</select><br>";
    ?>
   Дата открытия: <input type="date" name="date" size="30" autocomplete="off" value="<?php echo $date;?>"><br>
   Стартовая сумма: <input type="text" name="start_value" size="30" autocomplete="off" value="<?php echo $start_value;?>"><br>
   <p>
     <input type="submit" name="add" value="Сохранить">
 </form>
 <a href="index.php">Вернуться к вкладам</a>
</body>
