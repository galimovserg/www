<html>
<head><title>Редактор</title></head>
<body>
<?php
  require_once "../connect.php";
  $res=mysqli_query($db,"select * from dpprog where id=".$_GET["id"]);
  while ($st=mysqli_fetch_array($res)) {
    $name=$st["name"];
    $percent=$st["percent"];
    $bid=$st["bid"];
  }
 ?>
 <form action="save_edit.php" metod="get">
   <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
   Название: <input type="text" name="name" size="50" autocomplete="off" value="<?php echo $name;?>"><br>
   % годовых: <input type="text" name="percent" size="20" autocomplete="off" value="<?php echo $percent;?>"><br>
   <?php echo "Банк: <select name='bid'>";
    $res=mysqli_query($db,"select * from bank");
    while($row=mysqli_fetch_array($res)){
      if($row["id"]==$bid){
        echo "<option value='".$row["id"]."' selected>";
      }else{
         echo "<option value='".$row["id"]."'>";
      }
      echo $row["name"];
      echo "</option>";
    }
    echo "</select><br>";
    ?>
  <p>
     <input type="submit" name="add" value="Сохранить">
 </form>
 <a href="index.php">Вернуться к каталогу</a>
</body>
