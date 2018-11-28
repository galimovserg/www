<?php
  require_once "../connect.php";
  $querystr="update bank set ";
  $querystr.="name='".$_GET["name"]."', ";
  $querystr.="inn='".$_GET["inn"]."', ";
  $querystr.="country='".$_GET["country"]."', ";
  $querystr.="rclass='".$_GET["rclass"]."', ";
  $querystr.="avalue=".$_GET["avalue"]." ";
  $querystr.="where id=".$_GET["id"]."";
  $res=mysqli_query($db,$querystr);
  if(mysqli_affected_rows($db)>0){
    echo "<p>Все сохранено!<br>";
    echo "<a href='index.php'>Вернутся к каталогу</a>";
  }else{
    echo "<p>Ошибка!<br>";
    echo "<a href='index.php'>Вернутся к каталогу</a>";
  }
?>
