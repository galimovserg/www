<?php
  if($_POST["d"]=="plus"){
    $c=$_POST["a"]+$_POST["b"];
    echo "Сумма чисел $c";
  }else{
    $c=$_POST["a"]*$_POST["b"];
    echo "Произведение чисел $c";
  }
  echo '<br><a href="lab-3-3.php">Вернуться назад</a>';
 ?>
