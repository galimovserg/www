<?php
require_once "connect.php";
$res=mysqli_query($db,"insert into mvsession set hall_id='".$_GET["hall_id"].
"', movie_id='".$_GET["film_id"]."', date='".$_GET["date"].
"', time='".$_GET["time"]."'");
if(mysqli_affected_rows($db)>0){
  echo "<p>Спасибо!<br>";
  echo "<a href='index.php'>Вернутся к расписанию</a>";
}else{
  echo "ошибка";
}
?>
