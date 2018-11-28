<?php
require_once "../connect.php";
$res=mysqli_query($db,"insert into bank set name='".$_GET["name"].
"', inn='".$_GET["inn"]."', country='".$_GET["country"].
"', rclass='".$_GET["rclass"]."', avalue='".$_GET["avalue"]."'");
if(mysqli_affected_rows($db)>0){
  echo "<p>Спасибо!<br>";
  echo "<a href='index.php'>Вернутся к каталогу</a>";
}else{
  echo "ошибка";
}
?>
