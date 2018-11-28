<?php
  require_once "../connect.php";
  $querystr="update dpprog set ";
  $querystr.="name='".$_GET["name"]."', ";
  $querystr.="percent='".$_GET["percent"]."', ";
  $querystr.="bid='".$_GET["bid"]."' ";
  $querystr.="where id=".$_GET["id"]."";
  $res=mysqli_query($db,$querystr);
  if(mysqli_affected_rows($db)>0){
    echo "<p>Все сохранено!<br>";
    echo "<a href='index.php'>Вернуться к каталогу</a>";
  }else{
    echo "<p>Ошибка!<br>";
    echo "<a href='index.php'>Вернуться к каталогу</a>";
  }
?>
