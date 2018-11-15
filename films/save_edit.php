<?php
  require_once "connect.php";
  $querystr="update movie set ";
  $querystr.="film_name='".$_GET["film_name"]."', ";
  $querystr.="film_genre='".$_GET["film_genre"]."', ";
  $querystr.="film_director='".$_GET["film_director"]."', ";
  $querystr.="film_year='".$_GET["film_year"]."', ";
  $querystr.="film_boxoff=".$_GET["film_boxoff"]." ";
  $querystr.="where film_id=".$_GET["film_id"]."";
  $res=mysqli_query($db,$querystr);
  if(mysqli_affected_rows($db)>0){
    echo "<p>Все сохранено!<br>";
    echo "<a href='index.php'>Вернутся к каталогу</a>";
  }else{
    echo "<p>Ошибка!<br>";
    echo "<a href='index.php'>Вернутся к каталогу</a>";
  }
?>
