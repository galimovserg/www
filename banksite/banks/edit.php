<html>
<head><title>Редактор</title></head>
<body>
<?php
  require_once "../connect.php";
  $res=mysqli_query($db,"select * from bank where id=".$_GET["id"]);
  while ($st=mysqli_fetch_array($res)) {
    $name=$st["name"];
    $inn=$st["inn"];
    $country=$st["country"];
    $rclass=$st["rclass"];
    $avalue=$st["avalue"];
  }
 ?>
 <form action="save_edit.php" metod="get">
   <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
   Название: <input type="text" name="name" maxlength="50" size="50" autocomplete="off" value="<?php echo $name;?>"><br>
   ИНН: <input type="text" name="inn" maxlength="12" size="12" autocomplete="off" value="<?php echo $inn;?>"><br>
   Страна: <input type="text" name="country" maxlength="30" size="30" autocomplete="off" value="<?php echo $country;?>"><br>
   Класс надежности: <input type="text" name="rclass" maxlength="20" size="20" autocomplete="off" value="<?php echo $rclass;?>"><br>
   Объем активов: <input type="text" name="avalue" maxlength="30" size="30" autocomplete="off" value="<?php echo $avalue;?>"><br>
   <p>
     <input type="submit" name="add" value="Сохранить">
 </form>
 <a href="index.php">Вернуться к каталогу</a>
</body>
