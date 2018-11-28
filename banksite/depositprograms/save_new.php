<?php
require_once "../connect.php";
$res=mysqli_query($db,"insert into dpprog set name='".$_GET["name"].
"', percent='".$_GET["percent"].
"', bid='".$_GET["bid"]."'");
if(mysqli_affected_rows($db)>0){
  echo "<p>Спасибо!<br>";
  echo "<a href='index.php'>Вернуться к каталогу</a>";
}else{
  echo "ошибка";
}
?>
