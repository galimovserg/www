<?php
  require_once "connect.php";
  $querystr="update hall set ";
  $querystr.="name='".$_GET["name"]."', ";
  $querystr.="type='".$_GET["typez"]."' ";
  $querystr.="where id=".$_GET["id"]."";
  $res=mysqli_query($db,$querystr);
  if(mysqli_affected_rows($db)>0){
    echo "<p>Все сохранено!<br>";
    echo "<a href='index.php'>Вернуться к списку</a>";
  }else{
    echo "<p>Ошибка!<br>";
    echo "<a href='index.php'>Вернуться к списку</a>";
  }
?>
