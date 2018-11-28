<?php
require_once "../connect.php";
$res=mysqli_query($db,"insert into deposit set date='"
.$_GET["date"].
"', prog_id='".
$_GET["prog_id"].
"', start_value='".
$_GET["start_value"]
."'");
if(mysqli_affected_rows($db)>0){
  echo "<p>Спасибо!<br>";
  echo "<a href='index.php'>Вернуться к списку вкладов</a>";
}else{
  echo "ошибка";
}
?>
