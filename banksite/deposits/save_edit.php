<?php
  require_once "../connect.php";
  $querystr="update deposit set ";
  $querystr.="date='".$_GET["date"]."', ";
  $querystr.="prog_id='".$_GET["prog_id"]."', ";
  $querystr.="start_value='".$_GET["start_value"]."' ";
  $querystr.="where id=".$_GET["id"]."";
  $res=mysqli_query($db,$querystr);
  if(mysqli_affected_rows($db)>0){
    echo "<p>Все сохранено!<br>";
    echo "<a href='index.php'>Вернутся к вкладам</a>";
  }else{
    echo "<p>Ошибка!<br>";
    echo "<a href='index.php'>Вернутся к списку</a>";
  }
?>
