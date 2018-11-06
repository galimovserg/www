<?php
  $s3=$_POST["f"]." ".$_POST["n"];
  $s4='. Мы рады вас приветствовать!';
  switch ($_POST["z"]) {
    case 1:
      $s1="Уважаемый ";
      $s2="господин ";
    break;
    case 2:
      $s1="Уважаемая ";
      $s2="госпожа ";
    break;
    case 3:
      $s1="Уважаемый ";
      $s2="товарищ ";
    break;
    default:
      // code...
    break;
  }
  echo $s1.$s2.$s3.$s4;
  echo "<br><br>Информация:";
  echo "<p><textarea cols=25 rows=5>";
  echo $_POST["info"];
  echo "</textarea>"
 ?>
