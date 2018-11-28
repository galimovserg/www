<?php
  require_once "connect.php";
  $querystr="update mvsession set ";
  $querystr.="hall_id='".$_GET["hall_id"]."', ";
  $querystr.="movie_id='".$_GET["movie_id"]."', ";
  $querystr.="date='".$_GET["date"]."', ";
  $querystr.="time='".$_GET["time"]."' ";
  $querystr.="where id=".$_GET["id"]."";
  $res=mysqli_query($db,$querystr);
  if(mysqli_affected_rows($db)>0){
    echo "<p>Все сохранено!<br>";
    echo "<a href='index.php'>Вернутся к расписанию</a>";
  }else{
    echo "<p>Ошибка!<br>";
    echo "<a href='index.php'>Вернутся к расписанию</a>";
  }
?>
