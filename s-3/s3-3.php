<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
  <?php
    function issimple($m){
      for($j=2;$j<$m;$j++){
        if($m%$j==0){
          return false;
        }
      }
      return true;
    }
    if(isset($_POST["calc"])&&isset($_POST["n"])&&isset($_POST["op"])){
      if(is_numeric($_POST["n"])){
        $n=$_POST["n"];
        $op=$_POST["op"];
        switch ($_POST["op"]) {
          case 1:
            $r="Четные делители:<br>";
            for($i=2;$i<=$n;$i+=2){
              if($n%$i==0){
                $r=$r." ".$i;
              }
            }
          break;
          case 2:
            $r="Нечетные делители:<br>";
            for($i=1;$i<=$n;$i+=2){
              if($n%$i==0){
                $r=$r." ".$i;
              }
            }
          break;
          case 3:
            $r="Простые делители:<br>";
            for($i=2;$i<=$n;$i++){
              if(($n%$i==0)&&(issimple($i))){
                $r=$r." ".$i;
              }
            }
          break;
          case 4:
            $r="Составные делители:<br>";
            for($i=2;$i<$n;$i++){
              if(($n%$i==0)&&(!issimple($i))){
                $r=$r." ".$i;
              }
            }
          break;
          case 5:
            $r="Все делители:<br>";
            for($i=1;$i<=$n;$i++){
              if($n%$i==0){
                $r=$r." ".$i;
              }
            }
          break;
          default:
          break;
        }
      }else{
        $n=1;
        $op=1;
        $r="Неверный формат!";
      }
    }else{
      $n=1;
      $op=1;
      $r="Неверный формат!";
    }

    echo $r;
   ?>
  <form method = "post" action="<?php echo stripcslashes($_SERVER["PHP_SELF"]);?>">
    N: <input type="text" name="n" size="4" value="<?php echo $n;?>" autocomplete="off">
    <select name="op">
      <option value="1" <?php if($op==1){echo " selected";} ?> >четные делители</option>
      <option value="2" <?php if($op==2){echo " selected";} ?> >нечетные делители</option>
      <option value="3" <?php if($op==3){echo " selected";} ?> >простые делители</option>
      <option value="4" <?php if($op==4){echo " selected";} ?> >составные делители</option>
      <option value="5" <?php if($op==5){echo " selected";} ?> >все делители</option>
    </select>
    <p><input type="submit" name="calc">
  </form>
</body>
</html>
