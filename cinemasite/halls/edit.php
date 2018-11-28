<html>
<head><title>Редактор Кинозала</title></head>
<body>
<?php
  require_once "connect.php";
  $res=mysqli_query($db,"select * from hall where id=".$_GET["id"]);
  while ($st=mysqli_fetch_array($res)) {
    $name=$st["name"];
    $typez=$st["type"];

  }
 ?>
 <form action="save_edit.php" metod="get">
   <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
   Название: <input type="text" name="name" size="50" autocomplete="off" value="<?php echo $name;?>"><br>
   Тип: <input type="text" name="typez" size="20" autocomplete="off" value="<?php echo $typez;?>"><br>
     <p>
     <input type="submit" name="add" value="Сохранить">
 </form>
 <a href="index.php">Вернуться к списку</a>
</body>
