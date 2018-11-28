<?php
require_once "connect.php";
$res=mysqli_query($db,"insert into hall set name='".$_GET["name"]."', type='".$_GET["type"]."'");
if(mysqli_affected_rows($db)>0){
  echo "<p>Спасибо(нет)!<br>";
  echo "<a href='index.php'>Вернутся к списку</a>";
}else{
  echo "ошибка";
}
?>
