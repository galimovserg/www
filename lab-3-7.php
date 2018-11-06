<html>
<head>
  <title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>

  <?php
  if(isset($_POST["obr"])){
    if(is_numeric($_POST["a"])){
      if($_POST["a"]>$_POST["h"]){
        echo $_POST["a"]." - много!";
      }else {
        if($_POST["a"]<$_POST["h"]){
          echo $_POST["a"]." - мало!";
        }else{
          echo $_POST["a"]." - правильно!";
        }
      }
    }else{
      echo "Введите число!";
    }
    $h=$_POST["h"];
  }else{
    echo "Введите число!";
    $h=rand(0,100);
  }


  ?>
  <p>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Введите число от 1 до 10:
    <input type="text" name="a" size="3" autocomplete="off">
    <input type="hidden" name="h" value=<?php print $h ?>>
    <p><input type="submit" name="obr" value="проверить">
  </form>
</body>
</html>
