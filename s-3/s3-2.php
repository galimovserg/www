<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
  <body>
    <h3>Калькулятор</h3>
    <p>
    <?php

      if(isset($_POST["calc"])&&isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["op"])){
        if(is_numeric($_POST["a"])&&is_numeric($_POST["b"])){
          $a=$_POST["a"];
          $b=$_POST["b"];
          $op=$_POST["op"];
          $r=0;
          switch ($_POST["op"]) {
            case 1:
              $r=$a+$b;
            break;
            case 2:
              $r=$a-$b;
            break;
            case 3:
              $r=$a*$b;
            break;
            default:
              if($b!=0){
                $r=$a/$b;
              }else{
                $r="На ноль не делят!";
              }


            break;
          }
        }else{
          $a=0;
          $b=0;
          $op=1;
          $r="Неверный формат!";
        }

    }else{
      $a=0;
      $b=0;
      $op=1;
      $r="Введите числа и выбирите операцию!";
    }
    echo $r;
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <input type="text" name="a" size=5 value="<?php echo $a;?>" autocomplete="off">
      <input type="text" name="b" size=5 value="<?php echo $b;?>" autocomplete="off">
      <p>Действие:
      <select name="op" size=1>
        <option value="1" <?php if($op==1){echo " selected";} ?> >сложить</option>
        <option value="2" <?php if($op==2){echo " selected";} ?> >вычесть</option>
        <option value="3" <?php if($op==3){echo " selected";} ?> >умножить</option>
        <option value="4" <?php if($op==4){echo " selected";} ?> >разделить</option>
      </select>
      <p>
      <input type="submit" value="Вперед!" name="calc">
    </form>
  </body>
</html>
