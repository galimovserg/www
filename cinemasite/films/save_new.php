<?php
require_once "connect.php";
$res=mysqli_query($db,"insert into movie set film_name='".$_GET["film_name"].
"', film_genre='".$_GET["film_genre"]."', film_director='".$_GET["film_director"].
"', film_year='".$_GET["film_year"]."', film_boxoff='".$_GET["film_boxoff"]."'");
if(mysqli_affected_rows($db)>0){
  echo "<p>Спасибо!<br>";
  echo "<a href='index.php'>Вернуться к каталогу фильмов</a>";
}else{
  echo "ошибка";
}
?>
